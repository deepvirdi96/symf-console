<?php
namespace App\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Services\GreetGenerator;

class GreetUser extends Command{

    private $greetGenerator;

    protected static $defaultName = 'app:greet';

    public function __construct(GreetGenerator $greetGenerator)
    {
        $this->greetGenerator = $greetGenerator;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Create a new user')
            ->setHelp('This command allows you to create a user...')
            ->setName('Create User')
            ->addArgument('name', InputArgument::REQUIRED , 'The Name of the user');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $this->greetGenerator->greetUser($input, $output);
        
    }
    
}