<?php

use App\Controllers\CandidateController;
use App\Controllers\UserController;
use App\Controllers\JobsController;
use App\Controllers\InterviewController;
use App\Controllers\ConsultancyController;
use App\Dao\CandidateDao;
use App\Dao\UserDao;
use App\Dao\JobsDao;
use App\Dao\TechnologyDao;
use App\Dao\InterviewDao;
use App\Dao\ConsultancyDao;

$container['CandidateController'] = function($c) {
    return new CandidateController(
        $c,
        $c->get('CandidateDao'),
        $c->get('UserDao'),
        $c->get('JobsDao'),
        $c->get('InterviewDao'),
        $c->get('ConsultancyDao')
    );
};

$container['CandidateDao'] = function($c) {
    return new CandidateDao(
        $c->get('db')
    );
};

$container['UserController'] = function($c) {
    return new UserController(
        $c,
        $c->get('UserDao'),
        $c->get('TechnologyDao')
    );
};

$container['UserDao'] = function($c) {
    return new UserDao(
        $c->get('db')
    );
};

$container['TechnologyDao'] = function($c) {
    return new TechnologyDao(
        $c->get('db')
    );
};

$container['JobsController'] = function($c) {
    return new JobsController(
        $c,
        $c->get('JobsDao'),
        $c->get('TechnologyDao')
    );
};

$container['JobsDao'] = function($c) {
    return new JobsDao(
        $c->get('db')
    );
};

$container['InterviewController'] = function($c) {
    return new InterviewController(
        $c,
        $c->get('InterviewDao')
    );
};

$container['InterviewDao'] = function($c) {
    return new InterviewDao(
        $c->get('db')
    );
};

$container['ConsultancyController'] = function($c) {
    return new ConsultancyController(
        $c,
        $c->get('ConsultancyDao')
    );
};

$container['ConsultancyDao'] = function($c) {
    return new ConsultancyDao(
        $c->get('db')
    );
};