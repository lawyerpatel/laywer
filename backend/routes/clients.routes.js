const express = require('express');
const routes = express.Router();

//middleware
const clientValidate = require('../middleware/validation/clients.validation');

// controller
const CLIENT = require('../controllers/client.controller')

routes.post('/register',[],CLIENT.register);
routes.post('/login',[clientValidate.login],CLIENT.login);
routes.post('/forgetpwd',[],CLIENT.forgetpwd);
//routes.get('/:id',[],CLIENT.getlawyer);
routes.delete('/:id',[],CLIENT.delete);


module.exports = routes;