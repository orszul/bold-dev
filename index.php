<?php get_header(); ?>


<section class="start">
    <div class="container">
        <div class="col-6 column container__align-center flex-item">
            <div class="box-left">
                <h1>Lorem ipsum dolor sit
                    amet consectetur</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, leo at tempor varius,
                    mauris
                    neque fringilla elit, in tristique augue </p>
                <button href="#" class="btn btn__green">Get Started</button>
            </div>
        </div>
        <div class="col-6 column flex-item">
            <div class="box-right">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/Illustration.svg"
                     alt=""/>
            </div>
        </div>
    </div>
</section>


<section class="information">
    <div class="container container__bg-white container__align-center container__justify-center">
        <div class="col-4 column container__justify-center container__align-center box">
            <div class="inner">
                <div class="inner__icon">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/users.svg"
                         alt="Users"/>
                </div>
                <div class="inner__right">
                    <span class="number">90+</span>
                    <span class="text">Users</span>
                </div>
            </div>
        </div>
        <div class="col-4 column container__justify-center container__align-center box">
            <div class="inner">
                <div class="inner__icon">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/locations.svg"
                         alt="Locations"/>
                </div>
                <div class="inner__right">
                    <span class="number">30+</span>
                    <span class="text">Locations</span>
                </div>
            </div>
        </div>
        <div class="col-4 column container__justify-center container__align-center box">
            <div class="inner">
                <div class="inner__icon">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/servers.svg"
                         alt="Servers"/>
                </div>
                <div class="inner__right">
                    <span class="number">50+</span>
                    <span class="text">Servers</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="plan">
    <div class="container container__align-center container__justify-center">
        <div class="col-12 column plan-header">
            <h2>Choose Your Plan</h2>
            <p>Let's choose the package that is best for you and explore it happily and cheerfully.</p>
        </div>
        <div class="container__justify-center box-plan">
            <div class="inner">
                <div class="inner__content">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/plan.svg"
                         alt="Free Plan"/>
                    <p class="text">Free Plan</p>
                    <ul class="list">
                        <li>Unlimited Bandwitch</li>
                        <li>Encrypted</li>
                        <li>No Traffic Logs</li>
                        <li>Works on All Devices</li>
                    </ul>
                </div>
                <div class="inner__bottom">
                    <p class="price">Free</p>
                    <button class="btn btn__white">Select</button>
                </div>
            </div>
        </div>
        <div class="container__justify-center box-plan">
            <div class="inner">
                <div class="inner__content">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/plan.svg"
                         alt="Standart Plan"/>
                    <p class="text">Standart Plan</p>
                    <ul class="list">
                        <li>Unlimited Bandwitch</li>
                        <li>Encrypted Connection</li>
                        <li>Yes Traffic Logs</li>
                        <li>Works on All Devices</li>
                        <li>Connect Anyware</li>
                    </ul>
                </div>
                <div class="inner__bottom">
                    <p class="price">$12 <span>/ mo</span></p>
                    <button class="btn btn__white">Select</button>
                </div>
            </div>
        </div>
        <div class="container__justify-center box-plan">
            <div class="inner">
                <div class="inner__content">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/bold-dev/assets/images/plan.svg"
                         alt="Premium Plan"/>
                    <p class="text">Premium Plan</p>
                    <ul class="list">
                        <li>Unlimited Bandwitch</li>
                        <li>Encrypted Connection</li>
                        <li>Yes Traffic Logs</li>
                        <li>Works on All Devices</li>
                        <li>Connect Anyware</li>
                        <li>Get New Features</li>
                    </ul>
                </div>
                <div class="inner__bottom">
                    <p class="price">$12 <span>/ mo</span></p>
                    <button class="btn btn__white">Select</button>
                </div>
            </div>
        </div>

    </div>

</section>


<?php get_footer(); ?>
