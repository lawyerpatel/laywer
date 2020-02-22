$(document).ready(function () {
    var count = 0;
    var convForm = $('#chat').convform({
        eventList: {
            onInputSubmit: function (convState, ready) {
                console.log('input is being submitted...');
                //here you send the response to your API, get the results and build the next question
                //when ready, call 'ready' callback (passed as the second parameter)
                if (convState.current.answer.value === 'end') {
                    convState.current.next = false;
                    //emulating random response time (100-600ms)
                    setTimeout(ready, Math.random() * 500 + 100);
                } else {
                    if (Array.isArray(convState.current.answer)) var answer = convState.current.answer.join(', ');
                    else var answer = convState.current.answer.text;
                    convState.current.next = convState.newState({
                        type: 'select',
                        noAnswer: true,
                        name: 'dynamic-question-' + count,
                        questions: ['This question state was built on your previous answer (you answered: ' + answer + ') and doesnt expect an answer'],
                    });
                    convState.current.next.next = convState.newState({
                        type: 'select',
                        name: 'dynamic-question-' + count,
                        questions: ['This question state was built on your previous answer (you answered: ' + answer + ')'],
                        answers: [
                            { text: 'Answer 1', value: '1' },
                            { text: 'Answer 2', value: '2' },
                            { text: 'END', value: 'end' }
                        ]
                    });
                    //emulating random response time (100-600ms)
                    setTimeout(ready, Math.random() * 500 + 100);
                }
                count++;
            }
        }
    });
});