const _ = require('lodash');
const {
    Specilization
} = require('../models/specilization.model')
const Respond = require('../helpers/resHelper');
const hash = require('object-hash');

exports.create = async (req, res) => {
    let data = {
        tag: req.body.tag,
        key: req.body.key
    }
    let specilization = new Specilization(data);
    specilization = await specilization.save();
    return Respond.success('specilization created successfully', specilization.toJSON(), res);
};

exports.multi_create = async (req, res) => {    
    Specilization.insertMany(req.body.tags, (err, sps) => {
        if(!err){
            return Respond.exception(err, null, res);
        }
        if (!!sps)
            return Respond.success('specilizations created successfully', sps, res);
    });

}; 