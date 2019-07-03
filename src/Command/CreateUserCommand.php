<?php
namespace App\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class CreateUserCommand extends Command{

    protected static $defaultName = 'app:create-user';

    protected function configure()
    {
        $this
            ->setDescription('Create a new user')
            ->setHelp('This command allows you to create a user...')
            ->setName('Create User');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);
    }
    
}