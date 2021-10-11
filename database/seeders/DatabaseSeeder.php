<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role' => 3,
            'first_name' => 'Barry',
            'middle_name' => '',
            'insertion' => 'van der',
            'last_name' => 'H',
            'email' => 'barry@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\1\profile_image.jpg',
            'background_image' => '\Users\1\background_image.jpg',
            'bio' => 'Mensen vinden mij eerst vaak verdacht overkomen en misschien klopt dat wel'
        ]);

        User::create([
            'role' => 1,
            'first_name' => 'Tarik',
            'middle_name' => 'Kwamina',
            'insertion' => '',
            'last_name' => 'Gassie',
            'email' => 'tarik@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\2\profile_image.jpg',
            'background_image' => '\Users\2\background_image.jpg',
            'bio' => 'Professionele Tenisser'
        ]);

        User::create([
            'role' => 2,
            'first_name' => 'Bert',
            'middle_name' => 'Derk',
            'insertion' => 'van der',
            'last_name' => 'Zand',
            'email' => 'bert@example.com',
            'password' => bcrypt('test'),
            'gender' => 'Male',
            'birthdate' => '1990-01-01',
            'street_name' => 'Wijnhaven',
            'house_number_and_extension' => '14',
            'postal_code' => '3011WN',
            'country' => 'Nederland',
            'phone_number' => '0601234567',
            'profile_image' => '\Users\3\profile_image.jpg',
            'background_image' => '\Users\3\background_image.jpg',
            'bio' => 'Ik ben al een tijdje actief voor de tennisclub en daarom schrijf af en toe wel eens leuke news items.'
        ]);

         Category::create([
             'name' => 'Event',
             'slug' => 'event'
         ]);

        Category::create([
            'name' => 'Update',
            'slug' => 'update'
        ]);
        Category::create([
            'name' => 'Covid',
            'slug' => 'covid'
        ]);

        Article::create([
            'user_id' => 1,
            'slug' => 'my-first-article',
            'category_id' => 1,
            'title' => 'My first article',
            'article_image' => '\Articles\1\article_image.jpg',
            'article_banner' => '\Articles\1\article_banner.jpg',
            'article_summary' => 'Dit is een korte summary die op de overview page en boven de body van een article geplaatst zou moeten worden. De bedoeling is dat en best een lange tekst kan zijn en dat het er netjes op de overview page uitgelicht kan worden of op de homepage. Als de summary te lang is dan moet de summary wel afgekort worden. Dus met deze lap tekst zal dat wel een goede functionaliteits test kunnen zijn. Wie weet had ik net zo goed een lorem generator kunne gebruiken. Gelukkig valt het eigenlijk best mee hoeveel moeite dit is. Eigenlijk kom ik er nu wel achter dat de data type misschien toch te kort is voor de functionaliteit dat het moet uitvoeren dus dat zal ik dan straks wel aanpassen. Note to self sla dit op ofzo. Nu is dit wel een goede grote voor een voorbeeld samenvatting denk ik.',
            'article_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae eleifend purus. Nulla vestibulum augue nisi, et dictum lectus finibus eu. Integer lobortis eleifend felis, et vulputate dolor imperdiet et. Mauris ligula ipsum, aliquet sed porta vitae, placerat eu turpis. Fusce felis felis, ornare et maximus sit amet, blandit ac elit. Aenean ut arcu elementum, aliquet eros at, dapibus ante. Praesent at molestie justo, id varius tortor. In ultricies tristique consectetur.
Aliquam congue libero tempor justo ullamcorper consequat. Aenean condimentum commodo nunc, sed elementum odio. Phasellus rutrum et nibh vel fermentum. Sed risus ipsum, ultrices vel euismod ut, ornare non velit. Integer eu rhoncus odio. Donec quis odio non velit varius aliquet id a purus. Phasellus sed neque venenatis, vulputate ante ac, sollicitudin turpis. Vestibulum ultricies, turpis ut ultrices cursus, orci turpis aliquet nibh, vel hendrerit tortor dolor et arcu. Aenean ex lacus, tempor at velit sit amet, pretium feugiat ligula. Nulla accumsan, lacus quis accumsan egestas, felis mauris sollicitudin erat, in commodo nisl tortor et diam. Nullam lorem sem, elementum ac mollis vitae, ultricies nec sapien. Nullam aliquet tincidunt velit, eu varius urna.
Curabitur eu felis elit. Cras tellus neque, egestas sit amet luctus ac, consequat sit amet ligula. In consequat consectetur ex vel lacinia. Phasellus interdum nisl et eleifend pulvinar. Vivamus aliquam dui viverra lectus vulputate auctor. Aliquam id erat at magna facilisis egestas sit amet non velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Vestibulum sed tellus ex. Aenean sed lacinia mi, ut aliquet arcu. Vestibulum mattis tortor non mi vulputate, eget ultricies odio tempor. In eleifend placerat tincidunt. Sed volutpat, ipsum nec vehicula vehicula, lacus ante sollicitudin tortor, ut laoreet tellus eros ac massa. Pellentesque lacus nulla, scelerisque id nisi vitae, gravida elementum purus. Sed sit amet neque ut massa blandit molestie in nec lorem. Sed felis justo, commodo sed malesuada ac, gravida fermentum enim. Nam ac diam imperdiet, facilisis tortor ornare, sollicitudin mauris. Morbi turpis elit, varius non malesuada ac, facilisis vitae sapien. Suspendisse potenti.
Nam in efficitur nunc. Praesent euismod ultrices convallis. Donec egestas velit ac est ultricies malesuada. Phasellus luctus tortor sed ipsum fringilla bibendum. Mauris non lorem quis diam rhoncus egestas. Quisque et varius enim. Donec fermentum, metus a semper volutpat, justo felis ullamcorper mauris, posuere malesuada augue ante non augue. Duis eu metus nec metus ultrices tempor a at ante. Donec sed elit vitae enim eleifend ultrices vel eu mauris. Fusce dictum congue lectus. Fusce sit amet magna tempor, tempor velit porttitor, placerat nisi. In hac habitasse platea dictumst. Ut malesuada vestibulum libero, ac viverra lacus porta at. In sed turpis ut lorem dignissim faucibus vitae quis lorem.
',
            'published' => 1,
            'highlighted' => 1,
            'article_publish_date' => '2021-10-09'
        ]);
        Article::create([
            'user_id' => 1,
            'slug' => 'my-seccond-article',
            'category_id' => 2,
            'title' => 'My seccond article',
            'article_image' => '\Articles\2\article_image.jpg',
            'article_banner' => '\Articles\2\article_banner.jpg',
            'article_summary' => 'Dit is een korte summary die op de overview page en boven de body van een article geplaatst zou moeten worden. De bedoeling is dat en best een lange tekst kan zijn en dat het er netjes op de overview page uitgelicht kan worden of op de homepage. Als de summary te lang is dan moet de summary wel afgekort worden. Dus met deze lap tekst zal dat wel een goede functionaliteits test kunnen zijn. Wie weet had ik net zo goed een lorem generator kunne gebruiken. Gelukkig valt het eigenlijk best mee hoeveel moeite dit is. Eigenlijk kom ik er nu wel achter dat de data type misschien toch te kort is voor de functionaliteit dat het moet uitvoeren dus dat zal ik dan straks wel aanpassen. Note to self sla dit op ofzo. Nu is dit wel een goede grote voor een voorbeeld samenvatting denk ik.',
            'article_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae eleifend purus. Nulla vestibulum augue nisi, et dictum lectus finibus eu. Integer lobortis eleifend felis, et vulputate dolor imperdiet et. Mauris ligula ipsum, aliquet sed porta vitae, placerat eu turpis. Fusce felis felis, ornare et maximus sit amet, blandit ac elit. Aenean ut arcu elementum, aliquet eros at, dapibus ante. Praesent at molestie justo, id varius tortor. In ultricies tristique consectetur.
Aliquam congue libero tempor justo ullamcorper consequat. Aenean condimentum commodo nunc, sed elementum odio. Phasellus rutrum et nibh vel fermentum. Sed risus ipsum, ultrices vel euismod ut, ornare non velit. Integer eu rhoncus odio. Donec quis odio non velit varius aliquet id a purus. Phasellus sed neque venenatis, vulputate ante ac, sollicitudin turpis. Vestibulum ultricies, turpis ut ultrices cursus, orci turpis aliquet nibh, vel hendrerit tortor dolor et arcu. Aenean ex lacus, tempor at velit sit amet, pretium feugiat ligula. Nulla accumsan, lacus quis accumsan egestas, felis mauris sollicitudin erat, in commodo nisl tortor et diam. Nullam lorem sem, elementum ac mollis vitae, ultricies nec sapien. Nullam aliquet tincidunt velit, eu varius urna.
Curabitur eu felis elit. Cras tellus neque, egestas sit amet luctus ac, consequat sit amet ligula. In consequat consectetur ex vel lacinia. Phasellus interdum nisl et eleifend pulvinar. Vivamus aliquam dui viverra lectus vulputate auctor. Aliquam id erat at magna facilisis egestas sit amet non velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Vestibulum sed tellus ex. Aenean sed lacinia mi, ut aliquet arcu. Vestibulum mattis tortor non mi vulputate, eget ultricies odio tempor. In eleifend placerat tincidunt. Sed volutpat, ipsum nec vehicula vehicula, lacus ante sollicitudin tortor, ut laoreet tellus eros ac massa. Pellentesque lacus nulla, scelerisque id nisi vitae, gravida elementum purus. Sed sit amet neque ut massa blandit molestie in nec lorem. Sed felis justo, commodo sed malesuada ac, gravida fermentum enim. Nam ac diam imperdiet, facilisis tortor ornare, sollicitudin mauris. Morbi turpis elit, varius non malesuada ac, facilisis vitae sapien. Suspendisse potenti.
Nam in efficitur nunc. Praesent euismod ultrices convallis. Donec egestas velit ac est ultricies malesuada. Phasellus luctus tortor sed ipsum fringilla bibendum. Mauris non lorem quis diam rhoncus egestas. Quisque et varius enim. Donec fermentum, metus a semper volutpat, justo felis ullamcorper mauris, posuere malesuada augue ante non augue. Duis eu metus nec metus ultrices tempor a at ante. Donec sed elit vitae enim eleifend ultrices vel eu mauris. Fusce dictum congue lectus. Fusce sit amet magna tempor, tempor velit porttitor, placerat nisi. In hac habitasse platea dictumst. Ut malesuada vestibulum libero, ac viverra lacus porta at. In sed turpis ut lorem dignissim faucibus vitae quis lorem.
',
            'published' => 1,
            'highlighted' => 1,
            'article_publish_date' => '2021-10-10'
        ]);
        Article::create([
            'user_id' => 3,
            'slug' => 'my-third-article',
            'category_id' => 3,
            'title' => 'My third article',
            'article_image' => '\Articles\3\article_image.jpg',
            'article_banner' => '\Articles\3\article_banner.jpg',
            'article_summary' => 'Dit is een korte summary die op de overview page en boven de body van een article geplaatst zou moeten worden. De bedoeling is dat en best een lange tekst kan zijn en dat het er netjes op de overview page uitgelicht kan worden of op de homepage. Als de summary te lang is dan moet de summary wel afgekort worden. Dus met deze lap tekst zal dat wel een goede functionaliteits test kunnen zijn. Wie weet had ik net zo goed een lorem generator kunne gebruiken. Gelukkig valt het eigenlijk best mee hoeveel moeite dit is. Eigenlijk kom ik er nu wel achter dat de data type misschien toch te kort is voor de functionaliteit dat het moet uitvoeren dus dat zal ik dan straks wel aanpassen. Note to self sla dit op ofzo. Nu is dit wel een goede grote voor een voorbeeld samenvatting denk ik.',
            'article_body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae eleifend purus. Nulla vestibulum augue nisi, et dictum lectus finibus eu. Integer lobortis eleifend felis, et vulputate dolor imperdiet et. Mauris ligula ipsum, aliquet sed porta vitae, placerat eu turpis. Fusce felis felis, ornare et maximus sit amet, blandit ac elit. Aenean ut arcu elementum, aliquet eros at, dapibus ante. Praesent at molestie justo, id varius tortor. In ultricies tristique consectetur.
Aliquam congue libero tempor justo ullamcorper consequat. Aenean condimentum commodo nunc, sed elementum odio. Phasellus rutrum et nibh vel fermentum. Sed risus ipsum, ultrices vel euismod ut, ornare non velit. Integer eu rhoncus odio. Donec quis odio non velit varius aliquet id a purus. Phasellus sed neque venenatis, vulputate ante ac, sollicitudin turpis. Vestibulum ultricies, turpis ut ultrices cursus, orci turpis aliquet nibh, vel hendrerit tortor dolor et arcu. Aenean ex lacus, tempor at velit sit amet, pretium feugiat ligula. Nulla accumsan, lacus quis accumsan egestas, felis mauris sollicitudin erat, in commodo nisl tortor et diam. Nullam lorem sem, elementum ac mollis vitae, ultricies nec sapien. Nullam aliquet tincidunt velit, eu varius urna.
Curabitur eu felis elit. Cras tellus neque, egestas sit amet luctus ac, consequat sit amet ligula. In consequat consectetur ex vel lacinia. Phasellus interdum nisl et eleifend pulvinar. Vivamus aliquam dui viverra lectus vulputate auctor. Aliquam id erat at magna facilisis egestas sit amet non velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
Vestibulum sed tellus ex. Aenean sed lacinia mi, ut aliquet arcu. Vestibulum mattis tortor non mi vulputate, eget ultricies odio tempor. In eleifend placerat tincidunt. Sed volutpat, ipsum nec vehicula vehicula, lacus ante sollicitudin tortor, ut laoreet tellus eros ac massa. Pellentesque lacus nulla, scelerisque id nisi vitae, gravida elementum purus. Sed sit amet neque ut massa blandit molestie in nec lorem. Sed felis justo, commodo sed malesuada ac, gravida fermentum enim. Nam ac diam imperdiet, facilisis tortor ornare, sollicitudin mauris. Morbi turpis elit, varius non malesuada ac, facilisis vitae sapien. Suspendisse potenti.
Nam in efficitur nunc. Praesent euismod ultrices convallis. Donec egestas velit ac est ultricies malesuada. Phasellus luctus tortor sed ipsum fringilla bibendum. Mauris non lorem quis diam rhoncus egestas. Quisque et varius enim. Donec fermentum, metus a semper volutpat, justo felis ullamcorper mauris, posuere malesuada augue ante non augue. Duis eu metus nec metus ultrices tempor a at ante. Donec sed elit vitae enim eleifend ultrices vel eu mauris. Fusce dictum congue lectus. Fusce sit amet magna tempor, tempor velit porttitor, placerat nisi. In hac habitasse platea dictumst. Ut malesuada vestibulum libero, ac viverra lacus porta at. In sed turpis ut lorem dignissim faucibus vitae quis lorem.
',
            'published' => 1,
            'highlighted' => 1,
            'article_publish_date' => '2021-10-11'
        ]);
    }
}
