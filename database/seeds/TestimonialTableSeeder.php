<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Testimnial::class)->create([
            'name' => "Anabel lawrence",
            'testimony' => "Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour ou de mots aléatoires qui ne ressemblent pas une seconde à du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez être sûr qu'il n'y a rien d'embarrassant caché dans le texte. Tous les générateurs de Lorem Ipsum sur Internet tendent à reproduire le même extrait sans fin, ce qui fait de lipsum.com le seul vrai générateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour générer un Lorem Ipsum irréprochable. Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d'humour.",
        ]);

        factory(App\Testimnial::class)->create([
            'name' => "Frieda James",
            'testimony' => "Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des sections 1.10.32 et 1.10.33 du 'De Finibus Bonorum et Malorum' (Des Suprêmes Biens et des Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, proviennent de la section 1.10.32.",
        ]);

        factory(App\Testimnial::class)->create([
            'name' => "Henry Cambell",
            'testimony' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin lorem eu risus consectetur, venenatis porta dolor bibendum. Donec quis ante magna. Nam feugiat ligula pellentesque porta pretium. Pellentesque ut nibh id libero semper malesuada. Morbi id dui iaculis, condimentum augue at, finibus turpis. Quisque in eros ipsum. Nunc ac aliquam sem. Integer ut iaculis dui, id faucibus velit. Mauris quis purus augue. Praesent sit amet velit volutpat, cursus dolor id, mollis arcu. Pellentesque eleifend diam ac tortor imperdiet pharetra. Mauris rhoncus volutpat enim, id varius lectus. Cras ligula neque, tincidunt quis dui sit amet, lacinia molestie ex.",
        ]);

        factory(App\Testimnial::class)->create([
            'name' => "Florence Mary",
            'testimony' => "orem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan, ex id congue volutpat, mauris sapien sollicitudin ligula, in condimentum libero purus vel libero. Etiam ut dui eget diam venenatis gravida cursus et ante. Cras aliquet in est sagittis sodales. Aenean magna ante, pellentesque vel tempus eget, finibus ac ex. Aenean euismod sed felis in condimentum. Mauris mollis, mi ut sodales vulputate, mi purus blandit dolor, eu facilisis augue sapien ac nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque imperdiet, ante semper accumsan bibendum, elit leo convallis nisl, eu eleifend lorem quam sit amet diam. Integer congue purus orci, non convallis lorem pretium et. Nullam pharetra, augue sed ullamcorper pretium, nunc tellus lobortis lectus, quis luctus lorem tortor ac purus. Aenean maximus ex eget arcu placerat dapibus dapibus a diam. Aliquam erat volutpat. Duis facilisis cursus lacus sit amet sollicitudin.
Fusce posuere eros ullamcorper libero convallis vestibulum. Vivamus cursus venenatis placerat. Fusce nulla velit, aliquet sit amet tellus a, dapibus laoreet orci. Maecenas tempor consequat mi, sit amet sodales erat faucibus ac. Maecenas non volutpat massa. Sed gravida velit eget est tincidunt mollis. Fusce venenatis vulputate ante eget mattis.
Nulla hendrerit auctor euismod. Cras feugiat consequat diam id tempus. Fusce viverra suscipit tortor, ac consectetur tortor sagittis sit amet. Proin in pharetra sapien. Praesent pulvinar enim at ex feugiat pharetra. Proin euismod, eros eget faucibus pretium, justo tellus suscipit odio, vel dapibus neque ante vel eros. Morbi aliquet libero turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel lobortis justo, eget porttitor neque.
Pellentesque at facilisis quam. Aenean pharetra, nunc ut cursus scelerisque, libero dui rutrum lacus, id condimentum erat nulla vel justo. Suspendisse sollicitudin ex sit amet eleifend venenatis. Aenean a condimentum ligula, at vehicula turpis. Vivamus hendrerit diam a purus efficitur euismod in nec arcu. Integer sed feugiat sem. Aenean justo erat, rhoncus vel ligula ac, accumsan imperdiet lacus. Nulla ligula urna, gravida quis aliquam ut, porta quis metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ac velit vel metus cursus imperdiet. Suspendisse scelerisque nisi non velit tincidunt, a ornare eros condimentum. Aliquam non velit ac dolor molestie malesuada sed non lectus. Mauris placerat nisi vel massa tincidunt, a lacinia dui aliquet. Quisque sed sapien iaculis, tincidunt ipsum sed, tristique augue.",
        ]);
    }
}