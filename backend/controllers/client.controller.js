const _ = require('lodash');
const {
    Client
} = require('../models/client.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.register = async (req, res) => {

    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }

    let data = {
        name: {
            first_name: req.body.name.first_name,
            last_name: req.body.name.last_name
        },
        email: req.body.email,
        phone_no: req.body.phone_no,
        city: req.body.city,
        gender: req.body.gender,
        password: hash(cypherdata)
    };
    let client = new Client(data);
    client = await client.save();
    return Respond.success('client created successfully', client.details, res);
};

exports.login = async (req, res) => {

    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }

    if (!Client) {
        return Respond.unauthorized('Invalid login details', false, res);
    }

    let client = await Client.findOne({
        email: req.body.email,
        password: hash(cypherdata)
    });

    if (!client) {
        return Respond.unauthorized('Invalid login details', false, res);
    }
    return Respond.success('client login successfully', client.details, res);
};
exports.delete = async (req, res) => {
    let cond = {}
    console.log('py',req.params.id)
    if (!req.params.id) {
        return Respond.badRequest("Missing client id", [], res);
    }
    let client = await Client.findById(req.params.id);
}

exports.list = async (req, res) => {

    let cond = {};
    if (!!req.query.name) {
        cond['name'] = req.query.name;
    }

    let clients = await Client.find(cond);
    console.log(clients);

    if (!clients) {
        return Respond.notFound("no data found", false, res);
    }

    return Respond.success("Lawyer found", lawyers, res);
};

exports.forgetpwd = async (req, res) => {
    
    let client = await Client.findOne({
        email: req.body.email
    });
    if (!client) {
        return Respond.badRequest("Invalid Email Id", false, res);
    }
    let cypherdata = {
        email: req.body.email,
        password: req.body.password
    }
    client = await Client.findByIdAndUpdate(client._id, {$set:{password:hash(cypherdata)}}, (err, result) => {
        if (!!err) {
            return Respond.exception('Something want wrong :', err, res);
        }
        return Respond.success("Password updated", result.details, res);
    });
};
