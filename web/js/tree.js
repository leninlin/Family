(function (Raphael) {var r = Raphael('tree', 800, 600);

var center_w = r.width / 2;
var center_h = r.height / 2;
var level_step = 100;

var data = {
    0: ['папа,мама'],
    1: ['я,вика', 'маша', 'наташа']
}

for (var l = 0; l < 2; l++) {
    var level_w = data[l].length * 100 + (data[l].length - 1) * (100 / (data[l].length));
    var level_h = r.height - (level_step * l + 10);
    for (var i = 0; i < data[l].length; i++) {
        var item_x = (center_w - level_w / 2) + (100 + (100 / (data[l].length))) * i;
        var item_y = level_h - 60;
        r.rect(item_x, item_y, 100, 60, 10);
    }
}

})(window.Raphael)
