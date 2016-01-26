<section id="section-api_params" class="padding10 clearfix">
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
        <section class="pull-left gap-left">
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
      <section class="pull-left gap-left">
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