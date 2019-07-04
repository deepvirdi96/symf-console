<?php
namespace App\Services;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GreetGenerator{

     public function greetUser(InputInterface $input,OutputInterface  $output){

        $output->writeln([
            'User Greeting Console App',
            '=========================',
            ''
        ]);

        $output->write( $this->getGreeting() . ', ' . $input->getArgument('name') );
        
    }

    public function getGreeting(){

        $currentHour = date('H');
       
        if($currentHour >= 17 && $currentHour <= 23){

            return 'Good Morning';
            
        }elseif($currentHour == 00){
            
            return 'Good Noon';
            
        }elseif($currentHour > 00 && $currentHour <= 06){
            
            return 'Good Afternoon';
            
        }elseif($currentHour > 06 && $currentHour <= 10){
            
            return 'Good Evening';
            
        }elseif($currentHour > 10 && $currentHour <= 17){

            return 'You should be in the bed';
            
        }
        return 'not working';
        
    }
}