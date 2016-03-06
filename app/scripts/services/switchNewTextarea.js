app.service('switchNewTextarea', function(){
    var dur=300, service=this;
    this.classAdded = 'added';
    // get last added container
    function getTargetContainer(){
        return angular.element('#textareas').find('.'+service.classAdded).last();
    }
    // add textarea
    this.addTextarea = function(event, txtBodiesCnt){
        txtBodiesCnt++;
        var txtArea = getTargetContainer(),
            newTxtArea = txtArea.clone();
        newTxtArea.hide();
        newTxtArea.find('textarea').attr('name', 'text'+txtBodiesCnt);
        txtArea.after(newTxtArea);
        newTxtArea.fadeIn(dur);
        return txtBodiesCnt;
    };
    // remove textarea
    this.removeTextarea = function(event, txtBodiesCnt){
        txtBodiesCnt--;
        var container=getTargetContainer();
        container.fadeOut(dur, function(){
            container.remove();
        });
        return txtBodiesCnt;
    }
});