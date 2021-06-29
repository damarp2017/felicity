<?php

use App\Home;
use App\StaticContent\StaticAbout;
use App\StaticContent\StaticCapability;
use App\StaticContent\StaticOpportunity;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("12345678");
        $user->save();

        $home = new Home();
        $home->title = "Your brand is a promise to your customers.";
        $home->subtitle = "We help you keep it.";
        $home->vision = "Our Vision";
        $home->vision_description = "Our vision is to take India to the world - capture its culture, its people, its expertise, and its diversity to enable other markets to enrich and inculcate Indian values; to make India a front-runner in advertising.";
        $home->manifesto_image = Storage::url('images/home/our_manifestos.png');
        $home->manifesto = "Our Manifesto";
        $home->manifesto_description = "Felicity was started out of sheer love and admiration for the art of advertising. We believe that ideas can change the world and it is our constant endeavour to help businesses grow and evolve over time. We want to work with brands that synergise with the values that we strongly imbibe in every thing we do here at Felicity.";
        $home->missions = [
            [
                'sequence' => '1',
                'logo' => asset('images/home/items/1.png'),
                'title' => 'Win-Win Situation',
                'subtitle' => 'When you score, we score!',
            ],
            [
                'sequence' => '2',
                'logo' => asset('images/home/items/2.png'),
                'title' => 'We’re Problem Solvers',
                'subtitle' => 'We simplify technology so you can focus on your brand',
            ],
            [
                'sequence' => '3',
                'logo' => asset('images/home/items/3.png'),
                'title' => 'We Worship Data',
                'subtitle' => 'Our creativity is driven by data and human experiences',
            ],
            [
                'sequence' => '4',
                'logo' => asset('images/home/items/4.png'),
                'title' => 'We Are Bold',
                'subtitle' => 'We dare to dream and to turn it into reality',
            ],
            [
                'sequence' => '5',
                'logo' => asset('images/home/items/5.png'),
                'title' => 'We’re Agile',
                'subtitle' => 'We make decisions quickly but carefully',
            ],
            [
                'sequence' => '6',
                'logo' => asset('images/home/items/6.png'),
                'title' => 'We’re Match-Makers',
                'subtitle' => 'From consumer to customer, we help you convert',
            ],
        ];
        $home->button_1 = [
            'title' => 'Know More',
            'link' => url('about-us'),
        ];
        $home->button_2 = [
            'title' => 'Download Company Deck',
            'link' => "//docs.google.com/presentation/d/18FTqkjBucoyTOq9QmWR6yMUNFE4F6kEbvlio6IBuE_U/edit?usp=sharing",
        ];
        $home->save();

        $capability = new StaticCapability();
        $capability->title = "Our Capabilities";
        $capability->save();

        $opportunity = new StaticOpportunity();
        $opportunity->title = "Join us in taking<br>India to the world 🌏";
        $opportunity->subtitle = 'Small initiatives to make your life <span class="text--blue">better</span>';
        $opportunity->benefits = [
            [
                "logo" => Storage::url("images/opportunities/items/calendar.png"),
                "title" => "Flexible",
                "subtitle" => "Time Schedule",
            ],
            [
                "logo" => Storage::url("images/opportunities/items/learing.png"),
                "title" => "Learning and ",
                "subtitle" => "Development",
            ],
            [
                "logo" => Storage::url("images/opportunities/items/love.png"),
                "title" => "Generous Parental",
                "subtitle" => `<span class="font-bold">and</span> Family Leaves`,
            ],
            [
                "logo" => Storage::url("images/opportunities/items/headspace.png"),
                "title" => "Headspace",
                "subtitle" => "Membership",
            ],
            [
                "logo" => Storage::url("images/opportunities/items/book.png"),
                "title" => "Book",
                "subtitle" => "Reimbursements",
            ],
            [
                "logo" => Storage::url("images/opportunities/items/time.png"),
                "title" => "Paid Volunteer",
                "subtitle" => "Time",
            ],
        ];
        $opportunity->reasons = [
            [
                'image' => Storage::url("images/opportunities/1.png"),
                'title' => "Why should you work with us?",
                'description' => "Our vision is simple, yet powerful - Take India to the World. We know the immense talent India has to offer and we want to partner with individuals that share and feel strongly about where we are headed as a company. It takes courage and discipline to break through and create something that represents us at a global level. We are up for the challenge. Are you?",
            ],
            [
                'image' => Storage::url("images/opportunities/3.png"),
                'title' => "Work with a team of amazing individuals",
                'description' => "Being a service business, we realize how important it is to assemble a team that pushes the boundaries of what seems possible. We are creating a team that thinks beyond budgets and timelines. A team that understands the power of ideas and how their contributions can change the way people perceive things. And as the saying goes - with great power comes great responsibility, every team member at Felicity is helping each other become better, and do better.",
            ],
        ];
        $opportunity->purpose = 'Purpose driven team on a <br> <span class="text--blue">global mission</span>';
        $opportunity->status = "(No open positions currently. Check again later.)";
        $opportunity->save();

    }
}
