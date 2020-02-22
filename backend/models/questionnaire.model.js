var mongoose = require("mongoose");

var questionnaireSchema = mongoose.Schema({    
    question:String,
    question_type:Boolean,
    related_to:String,
    level:Number
});

var Questionnaire = mongoose.model("questionnaire", questionnaireSchema,"questionnaire");
exports.Questionnaire = Questionnaire;