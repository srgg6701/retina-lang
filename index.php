<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/default.css">
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/default.js"></script>
</head>
<body>
<div class="container">
  <h1 class="row">Hello, hunter for senses!</h1>
</div>
<hr/>
<div class="container">
  <div class="row">
    <div id="content"></div>
  </div>
  <form id="form-data" class="form-inline row table">
    <input class="form-control wide" placeholder="input a term here" type="text" name="data_entry" />
    <section id="section-methods" class="padding10">
    	<label>
      		<input type="radio" name="api-method" id="getTerm" required="required">Terms
        </label>
    	<label>
        	<input type="radio" name="api-method" id="getContextsForTerm" required="required">Contexts
        </label>
    	<label>
        	<input type="radio" name="api-method" id="getSimilarTerms" required="required">Similar terms
        </label>
    </section>
    <section id="section-api_params" class="padding10 clearfix">
      	 <div>retina_name</div>
      	 <div>
      		<select class="form-control" name="retina_name">
          		<option value="en_associative">en_associative</option>
		        <option value="en_synonymous">en_synonymous</option>
        	</select>
		</div>
        <div class="visibility none">
        	<br/>
            <div>context_id</div>
            <div><input class="form-control" type="text" id="context-id"></div>
        </div>
      <br/>
      	<div id="results-length" class="clearfix">
        	<section class="pull-left">
                <div>start_index</div>
                <div><input class="form-control" id="start-index" type="text" value="0"></div>
    		</section>
			<section class="pull-left">            
                <div>max_results</div>
                <div><input class="form-control" minlength="0" id="max-results" type="text" value="10"></div>
            </section>
        </div>
      <br/>
        <div class="clearfix">
          <section class="pull-left visibility none">
            <div>pos_type</div>
            <div>
                <select class="form-control" name="pos_type">
                    <option selected="" value=""></option>
                    <option value="NOUN">NOUN</option>
                    <option value="ADJECTIVE">ADJECTIVE</option>
                    <option value="VERB">VERB</option>
                </select>
            </div>
          </section>
          <section class="pull-left">
            <div>get_fingerprint</div>
            <div>
                <select class="form-control" name="get_fingerprint">
                  <option selected="selected" value="true">true</option>
                  <option value="false">false (default)</option>
                </select>
            </div>
          </section>
        </div>
    </section>
    <button class="btn table btn-primary" id="btn-get-data" type="submit">Get data</button>
  </form>
</div>
</body>
</html>