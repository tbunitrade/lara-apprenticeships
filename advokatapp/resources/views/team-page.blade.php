@include('header-small')
<section class="section team">
    <div class="wrap">
        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Kucherenko-Denis-Viktorovich.jpeg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Кучеренко Денис Вікторович
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                        Експертиза у захисті підозрюваних/обвинувачених у тяжких і особливо тяжких злочинах.
                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>

        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Boyko-Olena-Oleksandrivna.jpg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Бойко Олена Олександрівна
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                        Надає правову допомогу з супутніх питань військовослужбовцям, мобілізованим, військовозобов’язаним, ветеранам війни ...
                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>

        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Popov-Mykyta-Hennadiyovych.jpg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Попов Микита Геннадійович
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат, заступник Голови Колегії
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                       Працював у міжнародних юридичних компаніях, в тому числі на керівних посадах. Досвід роботи помічника-консультанта депутата ...
                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>

        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Smyrnov-Valeriy-Rubenovych.jpg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Смирнов Валерій Рубенович
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                        Має 15-річний досвід юридичної практики. Професійне кредо: «Існує тільки один істинний закон – той, який дозволяє стати вільним»...
                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>
        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Sudeikina-Iryna-Volodymyrivna.jpeg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Судейкіна Ірина Володимирівна
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                        Адвокат за покликом серця,  з багаторічним стажем юридичної практики, провідний спеціаліст у сімейних,  цивільних,  господарських спорах.
                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>
        <div class="block ">
            <div class="photo">
                <img class="layerPhoto" src="{{ URL::asset('/assets/home-slider/Ivashchenko-Andrii-Ivanovych.jpg') }}">
            </div>
            <div class="info">
                <div class="title">
                    <p class="text layerName">
                        Іващенко Андрій Іванович.
                    </p>
                </div>
                <div class="position">
                    <p class="text layerPosition">
                        Адвокат
                    </p>
                </div>
                <div class="details">
                    <p class="text layerDetails">
                        Основна спеціалізація – надання правових послуг бізнесу.

                    </p>
                    <button type="button" class="btn btn-primary btn-about-lawyer" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                        Додаткова інформація
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal" tabindex="-1" id="exampleModal11">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title ">Кучеренко Денис Вікторович.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                Спеціалізація: <br><br>
                    Основна спеціалізація – кримінальне право та процес. Освіта – Національна юридична академія України ім. Ярослава Мудрого (Харків).
                    Початок кар’єри присвятив роботі в органах прокуратури України, адвокат з 2017 року.<br>
                    Експертиза у захисті підозрюваних/обвинувачених у тяжких і особливо тяжких злочинах.<br><br>
                    Також має досвід успішної співпраці у великих проектах, пов’язаних із взаємодією з органами місцевого самоврядування різного рівня.
                    Успішно поєднує активну юридичну практику з викладацькою діяльністю.

                </p>
            </div>

        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="exampleModal12">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Бойко Олена Олександрівна Володимирівна.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                    Адвокат у 2004 році закінчила Національну академію внутрішніх справ України, отримавши диплом з відзнакою за кваліфікацією юрист.<br><br>
                    Має досвід роботи юристом як в недержавних організаціях, так і в правоохоронних органах, зокрема, на посаді слідчого.<br><br>
                    Адвокатською діяльністю займається з 2009 року (свідоцтво про право на заняття адвокатською діяльністю № 3696 від 23.04.2009, видане Київською міською кваліфікаційно-дисциплінарною комісією адвокатури).
                    Основною спеціалізацією є кримінальне право, а саме:<br>
                    - захист  прав та законних інтересів підозрюваного, обвинуваченого (підсудного), засудженого, виправданого на всіх стадіях кримінального провадження;<br>
                    - представництво інтересів потерпілого, цивільного позивача, цивільного відповідача на всіх стадіях кримінального провадження;<br>
                    - захист прав та законних інтересів свідка у кримінальному провадженні.<br><br>
                    Успішно практикує в галузях адміністративного, цивільного, сімейного, трудового, житлового, спадкового права, надаючи увесь спектр послуг, передбачений чинним законодавством України.
                    <br><br>
                    У 2022 році пройшла курс військового права, отримавши сертифікат військового адвоката. Надає правову допомогу з супутніх питань військовослужбовцям, мобілізованим, військовозобов’язаним, ветеранам війни та членам їхніх сімей.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="exampleModal13">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Попов Микита Геннадійович.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                    Адвокат, заступник Голови Колегії, практикує право з 2008 року. Адвокат з 2011 року. Працював у міжнародних юридичних компаніях, в тому числі на керівних посадах.
                    Має досвід роботи помічника-консультанта депутата. Забезпечував ефективність виборчих процесів різного рівня.
                    <br><br>
                    Спеціалізація: вирішення конфліктів, медіація, судові спори (litigation) та кримінальний процес – кримінальні правопорушення в сфері економіки (white collar crime).
                    <br><br>
                    Має успішний досвід роботи у комплексних антирейдерських проектах з повернення викрадених активів: корпоративних прав і майна.
                    <br><br>
                    Вигравав господарські, цивільні, адміністративні справи, в тому числі резонансні: у Кабінету Міністрів України, Антимонопольного комітету України, Податкової Служби України,
                    підприємств важкої промисловості, фінансових установ, медіа тощо. В активі є успішний захист прав та законних інтересів багатьох приватних осіб, серед яких, в тому числі, є відомі політики,
                    бізнесмени, діячі культури. Системно надає адвокатські послуги на умовах pro bono – як благодійну допомогу з метою персонального внеску суспільні зміни.
                    <br><br>
                    Професійне кредо: «Витримане слово та домінантність інтересів Клієнта – фундамент репутації адвоката».
                </p>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="exampleModal14">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Смирнов Валерій Рубенович.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                    Адвокат основна спеціалізація – кримінальне право та процес. Освіта – Одеська національна юридична академія. Має 15-річний досвід юридичної практики.
                    <br><br>
                    Більше 10 років присвятив роботі у прокурорському корпусі України, де спеціалізувався на підтриманні обвинувачення у кримінальних справах, пов’язаних із правопорушеннями в сфері службової діяльності, господарської діяльності, злочинами проти життя і здоров’я, проти виборчих, трудових та інших особистих прав і свобод людини, тощо. Входив до команди провідних публічних обвинувачів Офісу Генерального прокурора, яких залучали до участі у найбільш резонансних кримінальних справах, пов’язаних із притягненням до кримінальної відповідальності колишніх та діючих високопосадовців, керівників правоохоронних органів та інших.
                    <br><br>
                    Користуючись набутим досвідом, успішно та ефективно здійснює захист клієнтів від кримінального переслідування, як на стадії досудового розслідування кримінальних проваджень, так і в судах усіх інстанцій.
                    <br><br>
                    Основні практики: захист прав і представництво інтересів керівників бізнесу і власників компаній у кримінальних провадженнях щодо економічних злочинів, державних службовців, суб’єктів корупційних правопорушень, посадових злочинів, а також злочинів, скоєних організованими групами і злочинними організаціями.
                    <br><br>
                    Професійне кредо: «Існує тільки один істинний закон – той, який дозволяє стати вільним».
                </p>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="exampleModal15">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Судейкіна Ірина Володимирівна.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                    Адвокат
                    <br><br>
                    Адвокат за покликом серця,  з багаторічним стажем юридичної практики, провідний спеціаліст у сімейних,  цивільних,  господарських спорах.
                    <br><br>
                    Додатково:
                    <br><br>
                    У 2009 році закінчила Одеську національну юридичну академію та отримала диплом з відзнакою за кваліфікацією магістр державної служби.
                    Адвокат з 2019 року.
                    Основною спеціалізацією є цивільне право та процес.
                    Успішно практикує в галузях цивільного, адміністративного, господарського, трудового, сімейного та спадкового права, надає юридичні послуги найвищої якості, захищає інтереси Клієнтів.
                    <br><br>
                    З-поміж інших професійних якостей:
                    <br><br>
                    - докорінне вивчення проблеми Клієнта;<br>
                    - вчасне прийняття правильних і, за необхідності, креативних (нестандартних) рішень для досягнення бажаного для Клієнта результату;<br>
                    - прагматизм;<br>
                    - вміння переконувати та перемагати.<br><br>

                    </p>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" id="exampleModal16">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Хрустовська Ольга Петрівна.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">

                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="exampleModal17">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title modal-title">Іващенко Андрій Іванович.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text">
                    Адвокат
                    <br><br>
                    Основна спеціалізація – надання правових послуг бізнесу.
                    <br><br>
                    Додатково:
                    <br><br>
                    Освіта – Харківський національний університет внутрішніх справ. У юридичній професії з 1997 року.
                    <br><br>
                    Понад 7 років працював у органах прокуратури на посаді слідчого, має досвід роботи у юридичних підрозділах Податкової служби, Держгеокадастру, державної адміністрації, юридичних компаніях.
                    Окрім основної спеціалізації, також спеціалізується на адміністративному, цивільному та сімейному праві, кримінальному праві, військовому праві.
                    <br><br>
                    Успішно здійснює захист і представництво Клієнтів. На його рахунку значна кількість "виграних" справ у апеляційних судах та Верховному Суді.
                    <br><br>
                    Професійні кредо: "Право як мистецтво" та "Рішення Є!".
                    <br><br>
                </p>
            </div>
        </div>
    </div>
</div>

@include('block.consultation-type-one')
@include('block.map')
@include('footer')
