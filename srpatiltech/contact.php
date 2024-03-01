<?php include("header.php"); ?>

<div class="header__wrapper wrapper">
    <div class="header__content content-block text--light-from-l">

        <div class="navigation__bottom">

            <div id="block-breadcrumbs" class="block-system block-system-breadcrumb-block">


                <nav class="breadcrumb" aria-label="breadcrumb">
                    <a href="index.php" class="breadcrumb__link hidden--from-l">home</a>
                    <ul class="breadcrumb__list hidden--until-l">
                        <li class="breadcrumb__item">
                            <a class="breadcrumb__link" href="index.php">home</a>
                        </li>
                        <li class="breadcrumb__item">
                            Contact Us
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
        <h1 class="content-block__title">Meet SR Patil Tech</h1>
        <!--<p class="content-block__description">As your digital enablement partner, we apply our
            talent-first approach to accelerate your digital journey, helping you unleash your potential
            and unlock unseen opportunities.</p>

        <a href="about.php" class="button">learn more</a> -->
    </div>
    <!-- <div class="header__media media-block media-block--center media-block--full-width">
                            <img src="images/home_banner.jpg" alt="srpatiltech homepage banner" title="srpatiltech homepage banner" />
                    </div> -->
</div>

</header>



<main role="main">
    <article role="article">
        <div class="block block--s bluex-teaser">
            <div class="block__wrapper block__wrapper--stacked wrapper">
                <div class="block__header block__header--l block__header--split">
                    <div class="row">
                        <div class="col-md-8">
                    <h2 class="block__title">Contact Form</h2>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col--md-12">
                            <label for="inputAddress" class="form-label">Any Comments</label>
                            <input type="textarea" class="form-control" id="inputAddress" placeholder="Anything...">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Send Request</button>
                        </div>
                    </form>

                        </div>
                        <div class="col-md-4"></div>
                    </div>

                </div>
            </div>
        </div>
    </article>
</main>
<?php include("footer.php"); ?>