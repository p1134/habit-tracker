<?php

namespace App\Command;

use DateTime;
use App\Entity\Tracking;
use App\Repository\UserRepository;
use App\Repository\TrackingRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SelectedHabitsRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:track-habits',
    description: 'Add a short description for your command',
)]
class TrackHabitsCommand extends Command
{
    public function __construct(EntityManagerInterface $entityManager, SelectedHabitsRepository $selectedHabitsRepository, TrackingRepository $trackingRepository, UserRepository $userRepository)
    {
        $this->entityManager = $entityManager;
        $this->selectedHabitsRepository = $selectedHabitsRepository;
        $this->trackingRepository = $trackingRepository;
        $this->userRepository = $userRepository;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Track habits for users automatically once a day')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $users = $this->userRepository->findAll();
        $today = new DateTime('now');

        foreach ($users as $user) {
            // Logic to track habits
            $habits = $this->selectedHabitsRepository->findByUser($user);  // Example function to get habits of a user

            foreach ($habits as $habit) {
                $alreadyTracked = $this->trackingRepository->findOneBy([
                    'user' => $user,
                    'selectedHabits' => $habit,
                    'date' => $today,
                ]);

                if (!$alreadyTracked) {
                    $tracking = new Tracking();
                    $tracking->setUser($user);
                    $tracking->setDate($today);
                    $tracking->setSelectedHabits($habit);
                    $tracking->setSelected(false);

                    $this->entityManager->persist($tracking);
                }
            }
        }

        $this->entityManager->flush();

        $output->writeln('Tracking completed successfully.');

        return Command::SUCCESS;
    }
}
