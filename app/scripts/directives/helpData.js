app.directive('helpDataEndpoint', function(){
    return{
        restrict: 'EA',
        replace: true,
        scope: {
            sdata: '=',
            sid: '@'
        },
        link:function($scope, element, attrs) {
            var tag, i, k=0, content, tg,
                infoBlock='',
                header = Object.keys($scope.sdata)[0],
                data = $scope.sdata[header],
                renderData = function(item, li){
                    k++;
                    if(k>30){
                        console.log('too much: ', i);
                        return;
                    } //console.log('%citem ('+typeof item+')', 'color: rebeccapurple', item);
                    if(typeof item == 'string'){
                        if(!li) li='p';
                        infoBlock+='<'+li+'>'+item+'</'+li+'>'; //console.log('%cinfoBlock', 'color:blue', infoBlock);
                    }else if(typeof item=='object'){
                        // Object
                        if(Object.prototype.toString.call(item)=='[object Object]'){
                            tag = Object.keys(item)[0].toLowerCase();
                            if(tag=='ol'||tag=='ul'){ //console.group('%cEnter ot OL', 'color:red');
                                infoBlock+='<'+tag+'>';
                                //
                                for(i in item){
                                    content = item[i]; //console.log('%ccontent ('+Object.prototype.toString.call(content)+')', 'color:brown', content, '\n---------------------------------');
                                    //
                                    if(Object.prototype.toString.call(content)=='[object Array]'){
                                        content.forEach(function(el){ //console.log('el ('+Object.prototype.toString.call(el)+')', el);
                                            if(typeof el == 'string') tg = 'li';
                                            renderData(el, tg);
                                        });
                                    }
                                }
                                infoBlock+='</'+tag+'>'; //console.groupEnd();
                            }
                        }else // Array ─ contains only <p></p>
                            if(Object.prototype.toString.call(item)=='[object Array]'){ //console.log('else item ('+Object.prototype.toString.call(item)+')', item);
                                //
                                item.forEach(function(inner_item){
                                    renderData(inner_item);
                                });
                        }
                    }
                };  //console.groupCollapsed(header);

            infoBlock+="<h4>"+header+"</h4>";

            data.forEach(function(element){
                renderData(element);
            }); //console.groupEnd();
            element.html(infoBlock);
        }
    };
});