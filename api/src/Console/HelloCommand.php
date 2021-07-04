<?php


namespace App\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
	public function configure(): void
	{
		$this
			->setName('hello')
			->setDescription('Hello command');
	}
	
	public function execute(InputInterface $input, OutputInterface $output): int
	{
		$output->writeln('<info>Hello, World!</info>');
		return 0;
	}
}