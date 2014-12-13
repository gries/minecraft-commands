<?php

namespace spec\gries\Minecraft\Commander\Command\ResponseParser;

use PhpSpec\ObjectBehavior;

class ListPlayersParserSpec extends ObjectBehavior
{
    function it_should_be_initializable()
    {
        $this->shouldHaveType('gries\Minecraft\Commander\Command\ResponseParser\ListPlayersParser');
    }

    function it_should_parse_player_names_from_log_lines()
    {
        $this->getResponse('There are 2/20 players online:gries, absolem')
            ->shouldReturn(array('gries', 'absolem'));
    }
}
