<?php

namespace EsnTest;

use EsnTest\Controller\EsnFetcher;

/**
 * Class for the exercise.
 */
class TestController extends EsnFetcher {


    /**
     * Function returning an array with all the countries where ESN has a national level from the API.
     */
    public function countriesArray() {
        if (!empty($resp[[
            'data' => $this->getRequest("countries"),
            'method' => 'GET',
        ]])) {
            return array ($resp);
        }
            var_dump($resp);
    }

    public function render() {

    }


}
