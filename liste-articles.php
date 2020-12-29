<!doctype html>
<html lang="en">

<head>
    <title>Mes super articles | Mon super blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Mon super blog</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="liste-articles.php">Mes super articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <h1>Mes super articles</h1>

        <?php
        function accrocheArticle(array $article = null)
        {
            if (empty($article['contenu'])) return 'Accroche indisponible...';

            return substr($article['contenu'], 0, 200) . '...';
        }

        $articles = array(
            array(
                'titre' => 'Le titre d\'un super article',
                'date' => 'Le 28/12/2020',
                'contenu' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas tempore quisquam assumenda. Vel fugiat fuga consequuntur id et nulla obcaecati perspiciatis necessitatibus! Harum repellendus dolorum iste rerum corporis adipisci maxime?
Unde, ducimus exercitationem. Pariatur ab, adipisci, laboriosam ducimus, ipsam voluptas id sint repudiandae praesentium officia minima itaque qui animi neque quo architecto deserunt beatae suscipit voluptates molestiae placeat numquam deleniti.
Cumque architecto ratione numquam iste libero aperiam vel, consequatur perferendis excepturi, esse cum odio cupiditate ex nihil enim temporibus saepe laudantium accusamus deleniti adipisci perspiciatis, distinctio amet error? Cumque, molestias.
Officiis unde nesciunt fugit velit quas eaque magni illo incidunt odio sit, aliquam quis nam nihil nostrum expedita inventore? Possimus sapiente debitis illo rerum et minus doloremque ipsum delectus quidem?
Tempora fugit perspiciatis autem, quibusdam eaque ullam et! Enim, ut ducimus. Voluptatum cumque fuga alias repellendus voluptatem inventore enim? Neque suscipit harum placeat soluta libero illum ab impedit, quia repudiandae!
Iure nemo dolorum nostrum quibusdam architecto vel delectus doloribus aut deleniti sed, aliquid rem quidem. Voluptatum dignissimos non labore, corporis ab exercitationem fuga, sunt id placeat, esse ducimus velit eius?
Eos atque eaque incidunt eius autem architecto voluptate doloribus magnam reprehenderit dolorum quas provident aspernatur, ipsam eligendi fugit est cumque harum voluptas ab, nihil nemo consequatur sapiente! Deserunt, qui ipsum!
Eum aliquid maxime soluta voluptates eaque minima quos excepturi doloribus, ipsa illo, fugiat iure quasi facilis repellendus ducimus animi in aliquam! Quibusdam vel ipsum labore quae alias ipsa! Aperiam, adipisci.
Quae omnis suscipit aliquid officia accusamus, placeat doloribus fugiat voluptatum architecto tempora assumenda! Harum, aut cum natus magni perferendis, voluptatibus eaque omnis quo, veniam numquam ab temporibus iure ipsum quibusdam.
Architecto, suscipit dolorum. Deserunt totam inventore, amet non, aliquam porro maxime sed vel fuga sapiente nisi enim soluta nam eum quas! Nihil cupiditate vel accusantium aliquam quaerat hic esse consectetur!
Minima, harum minus at, eos quaerat accusantium omnis nesciunt assumenda, aut laudantium ut perspiciatis! Voluptates id, cupiditate esse corporis magnam explicabo labore maxime enim ipsa nisi, adipisci, animi officiis laudantium!
Debitis in iste nihil hic sunt vitae, quas maiores omnis natus pariatur itaque culpa consequuntur dignissimos repellendus suscipit fuga ea ipsa vel. Deleniti nisi modi aspernatur voluptas architecto quaerat iusto.
Eius quaerat et numquam optio dolorum. Cupiditate esse ipsam possimus illum. Tenetur ad, est hic laboriosam sunt vitae minus odit, natus amet incidunt doloremque. Reprehenderit illo corrupti repudiandae enim a?
Quod odio modi earum reiciendis repudiandae eos, sint ratione aspernatur quos molestias a similique rem cum, odit esse fugit commodi, facere architecto iste est maxime perspiciatis libero debitis veniam. Quae.
Officia laudantium totam enim velit eum, repellat deleniti illo facere incidunt nostrum et doloremque optio nemo. Earum id sapiente, sequi accusamus illum quis voluptatibus, quidem molestias vel ut ab porro.
',
                'lien' => 'article.php',
            ),
            array(
                'titre' => 'Le titre d\'un super article 2',
                'date' => 'Le 28/12/2020',
                'contenu' => 'Impedit odio quae sapiente molestiae exercitationem atque odit, accusantium eveniet illum pariatur iste quidem totam recusandae obcaecati voluptatibus sed quos eos nulla nisi assumenda quod sit dicta cupiditate aut. Illum.
Vitae iste impedit deserunt ex necessitatibus sit sequi ea blanditiis consectetur quaerat. Laboriosam fugiat, laborum itaque ex voluptates cupiditate quo aspernatur? Nisi voluptate, at animi possimus porro sapiente officiis earum.
Aliquam sequi aliquid asperiores officia consequuntur id voluptatem ex hic dignissimos, magni atque dolore quia quos tempora ad placeat vel quis! Unde totam obcaecati tempore reprehenderit dolorum numquam, aliquid laudantium.
Est ullam fugit, libero dignissimos aliquid doloribus corporis eius quisquam ipsa! Excepturi, quo ipsam quam rem culpa minima officia nostrum modi quidem nesciunt tenetur numquam. Enim quam ut voluptatem culpa.
Perferendis sunt aliquid odio dolor veniam tenetur obcaecati deserunt ut assumenda possimus, nesciunt recusandae laudantium! Beatae, accusantium ex dicta consequuntur repudiandae harum omnis laudantium quam, quas repellendus rem similique facere?
Velit veniam fuga error sit assumenda repellat natus. Sequi natus ipsum velit atque doloremque libero deleniti vero officia voluptates. Cum illo nulla a et similique nisi blanditiis vel explicabo id?
Quaerat atque quae aut tempore maxime consectetur perferendis architecto nostrum, eius commodi omnis modi minima asperiores sequi, soluta accusantium placeat corrupti porro. Minima, mollitia doloribus? Accusantium nulla atque asperiores voluptatibus.
Porro nam omnis voluptas explicabo ex labore corporis? Qui laborum quod temporibus doloremque sed excepturi voluptatem, quaerat quidem vel ipsa natus, culpa repudiandae, velit adipisci et dolores. Fugit, adipisci officiis.
Pariatur, repellendus fuga impedit earum at placeat vitae itaque ab ducimus, labore id laborum. Accusamus nulla ad, sapiente blanditiis voluptatem ducimus, hic provident laborum animi, qui in eum consequuntur voluptates?
Enim, ratione ut eveniet rerum facilis consectetur vel aut commodi earum provident delectus, nostrum rem et, quaerat non magnam laboriosam! Enim modi accusamus doloribus quod dignissimos quae, quis cum alias!
Officia, voluptatem animi ducimus culpa nulla inventore suscipit ad enim, aspernatur totam consectetur magnam quas. At explicabo velit impedit rerum! Atque unde rem explicabo provident, optio quod! Commodi, sed corrupti?
Consectetur in cum rem dolorem voluptates eaque similique, dolor qui! Voluptatibus, incidunt. Neque nulla quam esse, explicabo expedita labore, culpa repudiandae nam repellendus a libero ex. Voluptatem doloribus atque eaque.
Rem quos odit eum blanditiis non expedita, iure exercitationem, nulla obcaecati maiores quo ullam dolore facilis asperiores ipsa porro optio dolorem esse aspernatur ex laudantium. Amet animi voluptatem eligendi quaerat.
Tempora suscipit velit itaque quidem quasi necessitatibus animi blanditiis reiciendis provident. Mollitia velit sit placeat eveniet, esse ipsum sunt qui perspiciatis tempora, corporis, laudantium hic enim ratione illo earum quasi!
Quos veritatis iure deserunt autem consectetur assumenda quidem doloremque alias nemo ullam recusandae dolorem, ipsa possimus atque, impedit enim tenetur debitis odio, cumque inventore pariatur consequuntur error praesentium! Dolorum, culpa?
',
                'lien' => 'article2.php',
            ),
            array(
                'titre' => 'Le titre d\'un super article 3',
                'date' => 'Le 28/12/2020',
                'contenu' => 'Ullam exercitationem nemo tenetur. Aliquid quam fugiat commodi veniam nostrum in facere consectetur minus natus fugit? Perspiciatis deserunt ducimus consequuntur. Ipsa non rem sit nesciunt asperiores labore atque vitae incidunt.
Velit itaque sint dignissimos voluptate nulla, perferendis perspiciatis saepe placeat quos deleniti cum, mollitia autem. Esse voluptatum, eaque a impedit expedita debitis recusandae maxime fugit deserunt, odit molestias. Exercitationem, cumque.
Corporis, provident maiores, omnis pariatur minima sequi rerum temporibus fugiat consequatur laborum ipsa qui eveniet nulla suscipit tempore a libero dolorem officiis quae dignissimos quia fuga similique quaerat? Eum, sit!
Doloremque, ut autem cum ipsum magnam quaerat mollitia magni, quasi eum nesciunt ad delectus sint repudiandae nobis dolore ducimus. Ipsam consequuntur provident deleniti natus at itaque vel illo excepturi optio!
Quibusdam sed ab repellendus velit atque fugit assumenda rem repudiandae, et aut dolores maiores impedit illum eum commodi aliquam dignissimos expedita quo illo laudantium praesentium sit modi ea itaque? Magni?
Ratione molestiae sit reiciendis repellat provident soluta placeat temporibus et beatae accusamus, earum voluptate, nulla odio quam aspernatur aperiam? Corporis quisquam sunt suscipit veritatis hic tempora distinctio voluptate numquam id?
Debitis velit alias dolore ducimus optio quisquam. Dolor iste officia quas, itaque aspernatur nesciunt, qui ad dignissimos, illo sit nobis ipsam! Assumenda voluptates possimus consequuntur laborum, fuga est quasi sapiente!
Quisquam, cumque hic eos itaque fuga eum impedit laborum dolore nostrum libero saepe, cum natus? Quos cumque, nostrum at ipsa quaerat blanditiis illum necessitatibus aspernatur natus. Fugit aspernatur incidunt aperiam?
Suscipit reiciendis ipsam, ducimus sint explicabo, harum ea eaque mollitia cupiditate, quod veritatis at impedit. Cumque modi quia aliquam, beatae eos ad. Perspiciatis magni harum consequatur sequi hic assumenda soluta.
Nostrum nihil vero ut quo blanditiis. Nulla accusamus recusandae amet qui deserunt saepe minima ullam dolores maxime. Fugit nobis officiis at sit temporibus, cum, magnam totam, illum itaque debitis expedita.
Ullam sed facilis neque nemo, dolorem corporis officia laboriosam atque similique ipsa rerum iusto totam est, odit nam alias. Tempora a, dolore asperiores consequatur recusandae illum perspiciatis officia et nulla.
Adipisci perferendis ea libero laboriosam vero fuga, ab consectetur at dolor totam, neque numquam doloremque eligendi cupiditate autem, consequuntur iure magni! Reiciendis, sunt. Incidunt, quasi perspiciatis. Aliquam doloribus quia necessitatibus.
Fugiat rerum dicta assumenda totam facere corporis cum ratione repellendus accusantium odit quisquam laudantium dolorum inventore aliquam quis eum tempora quidem recusandae quibusdam, adipisci ea voluptates. Quasi et reprehenderit culpa.
Nesciunt iusto laudantium odio dignissimos doloribus nihil quia quaerat facere nostrum tempora atque, delectus magnam officiis similique exercitationem libero esse consectetur fugiat qui. Beatae architecto culpa, similique laudantium quisquam dolorum!
Animi repellat voluptatum dolorum obcaecati dolor sit odit repudiandae ipsa molestias neque incidunt nisi expedita atque eaque magnam fugit et cum suscipit, rem nemo in corrupti aliquam consequuntur. Totam, tempora.',
                'lien' => 'article2.php',
            ),
            array(
                'titre' => 'Le titre d\'un super article Test',
                'date' => 'Le 28/12/2020',
                'lien' => 'article2.php',
            ),
        );
        ?>

        <div class="list-group my-4">
            <?php
            foreach ($articles as $article) { ?>

                <article class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h2 class="mb-1"><?= $article['titre'] ?></h2>
                        <small><?= $article['date'] ?></small>
                    </div>
                    <p class="mb-1"><?= accrocheArticle($article) ?></p>
                    <small class="text-muted"><a href="<?= $article['lien'] ?>">Lire l'article.</a></small>
                </article>

            <?php }
            ?>
        </div>
    </div>

</body>

</html>