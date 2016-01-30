
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/default.css">
    <script src="assets/js/libs/jquery.min.js"></script>
    <script src="assets/js/libs/bootstrap.min.js"></script>
    <script src="assets/js/default.js"></script>
</head>
<body>
<div class="container">
    <nav class="row navbar">    <ul class="nav navbar-nav pull-right">
            <li><a href="/?option=Retina">Retina</a></li>
            <li><a href="/?option=Term">Term</a></li>
            <li><a href="/?option=Text">Text</a></li>
            <li><a href="/?option=Expression">Expression</a></li>
            <li><a href="/?option=Compare">Compare</a></li>
            <li><a href="/?option=Image">Image</a></li>
            <li><a href="/?option=Classify">Classify</a></li>
        </ul>
        <h1 class="pull-left">
            <a href="/"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span><b>Retina</b>.client</a>
            <div id="powered">Powered by <a href="http://cortical.io">cortical.io</a></div>
        </h1>
        <div id="visual-circuits"></div>
    </nav>
</div>
<div class="container" id="content">
    <div class="row">
        <form class="form-inline" name="form-api-data" method="post">
            <div class="clearfix">
                <h2 class="pull-left gap-right">
                    Retina		</h2>
            </div>
            <div class="clearfix">
                <div>
                    Response Content Type:
                    <select class="form-control" name="responseContentType">
                        <option value="application/json">application/json</option>
                    </select>		<span data-ask-target="description-responseContentType" class="glyphicon glyphicon-question-sign"></span>
                </div>
                <div>
                    Retina name:
                    <select class="form-control" name="retina_name">
                        <option selected="selected" value="">-choose-</option>
                        <option value="en_associative">en_associative</option>
                        <option value="en_synonymous">en_synonymous</option>
                    </select>		<span data-ask-target="description-retina_name" class="glyphicon glyphicon-question-sign"></span>
                </div>
            </div>
            <main>
                <section id="section-api_params">
    </div>
    </section><div id="help-contents">
        <section id="description-responseContentType" class="collapse">
            <span>+</span>
            <h4>Response Content Type</h4>
            <p>Defines what type of data will come from the server. Currently it is only JSON.</p>	</section>
        <section id="description-retina_name" class="collapse">
            <span>+</span>
            <h4>Retina Name</h4>
            <p>Retina used for word space models. It allows to compute distances between terms, which can be used to determine the degree of similarity between terms.</p>
            <p>There are two types of retina:</p>
            <ol>
                <li>en_synonymous</li>
                <p>An english language retina focusing on synonymous similarity.</p>
                <li>en_associative</li>
                <p>An english language retina balancing synonymous and associative similarity.</p>
            </ol>	</section>
    </div>	</main>
    <input type="hidden" name="option" value="Retina"/>
    <button type="submit" class="btn">Get data!</button>
    </form>
</div>
</div>
</body>
</html>