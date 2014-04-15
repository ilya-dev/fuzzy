<?php namespace spec\Fuzzy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FuzzySpec extends ObjectBehavior {

    function it_is_initializable()
    {
        $this->shouldHaveType('Fuzzy\Fuzzy');
    }

    function it_performs_fuzzy_string_searching()
    {
        $rows = ['castToArr', 'cast', 'castToArray', 'toArr', 'toArray', 'castTo'];

        $this->search($rows, 'castToArray', 3)->shouldReturn(['castToArray', 'castToArr']);
    }

}

