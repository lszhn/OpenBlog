$.pjax({
    selector: 'a',
    container: '#main', //内容替换的容器
    show: 'fade',  //展现的动画，支持默认和fade, 可以自定义动画方式，这里为自定义的function即可。
    cache: false,  //是否使用缓存
    storage: false,  //是否使用本地存储
    titleSuffix: '', //标题后缀
    filter : function(href) {
        if ((href.indexOf("http://")==0)||(href.indexOf("https://")==0)) {
            return true;
        }
    },
    callback: function(){}
});
function getWidth() {
    return document.body.clientWidth;
}
function getHeight() {
    return document.body.clientHeight;
}
