var Desktop = {
    options: {
        windowArea: ".window-area",
        windowAreaClass: "",
        taskBar: ".task-bar > .tasks",
        taskBarClass: ""
    },

    wins: {},

    setup: function(options){
        this.options = $.extend( {}, this.options, options );
        return this;
    },

    addToTaskBar: function(wnd){
        var icon = wnd.getIcon();
        var wID = wnd.win.attr("id");
        var item = $("<span>").addClass("task-bar-item started").html(icon);

        item.data("wID", wID);

        item.appendTo($(this.options.taskBar));
    },

    removeFromTaskBar: function(wnd){
        var wID = wnd.attr("id");
        var items = $(".task-bar-item");
        var that = this;
        $.each(items, function(){
            var item = $(this);
            if (item.data("wID") === wID) {
                delete that.wins[wID];
                item.remove();
            }
        })
    },

    createWindow: function(o){
        o.onDragStart = function(){
            win = $(this);
            $(".window").css("z-index", 1);

            if (!win.hasClass("modal")) {
                win.css("z-index", 3);
            }
        };
        o.onDragStop = function(){
            win = $(this);
            if (!win.hasClass("modal"))
                win.css("z-index", 2);
        };
        o.onWindowDestroy = function(win){
            Desktop.removeFromTaskBar($(win));
        };

        var w = $("<div>").appendTo($(this.options.windowArea));
        var wnd = w.window(o).data("window");

        var win = wnd.win;
        var shift = Metro.utils.objectLength(this.wins) * 16;

        if (wnd.options.place === "auto" && wnd.options.top === "auto" && wnd.options.left === "auto") {
            win.css({
                top: shift,
                left: shift
            });
        }
        this.wins[win.attr("id")] = wnd;
        this.addToTaskBar(wnd);

        return wnd;
    }
};

Desktop.setup();

var w_icons = [
    'rocket', 'apps', 'cog', 'anchor'
];
var w_titles = [
    'rocket', 'apps', 'cog', 'anchor'
];

function createWindow(){
    var index = Metro.utils.random(0, 3);
    var w = Desktop.createWindow({
        resizeable: true,
        draggable: true,
        width: 300,
        icon: "<span class='mif-apps'></span>",
        title: "AB5OLUTE HELP",
        content: "<div class='p-2'>Nah jadi gini. Ini Windows gua bikin mahal-mahal buat kepentingan bersama. Windows ini nantinya akan menjadi wadah untuk menjadikan website AB5OLUTE tetap berguna.</div>"
    });

    setTimeout(function(){
        w.setContent("Haha canda.");
    }, 3000);
}

function createWindowWithCustomButtons(){
    var index = Metro.utils.random(0, 3);
    var customButtons = [
        {
            html: "<span class='mif-rocket'></span>",
            cls: "sys-button",
            onclick: "alert('Eh anjir nuklirnya keluncur dong!')"
        },
        {
            html: "<span class='mif-user'></span>",
            cls: "alert",
            onclick: "alert('Kau mati dalam 3 detik. mungkin.')"
        },
        {
            html: "<span class='mif-cog'></span>",
            cls: "warning",
            onclick: "alert('Ih ngatur ngatur ya kamu')"
        }
    ];
    Desktop.createWindow({
        resizeable: true,
        draggable: true,
        customButtons: customButtons,
        width: 360,
        icon: "<span class='mif-apps'></span>",
        title: "Apps Available",
        content: "<div class='p-2'>Website ini under development. Nantinya akan ada aplikasi-aplikasi yang menarik! Cosplay Windows beneran! Stay tune ya!!<br><br>((Mungkin yearbook juga bakal downloadable dari sini))</div>"
    });
}

function createWindowModal(){
    Desktop.createWindow({
        resizeable: false,
        draggable: true,
        width: 300,
        icon: "<span class='mif-cogs'></span>",
        title: "Power Boongan Options",
        content: "<div class='p-2'>Udah cukup mainnya bro? Mau kemana lagi?<br><br>Mau Shutdown ya tinggal close sih susah amat</div>",
        overlay: true,
        //overlayColor: "transparent",
        modal: true,
        place: "center",
        onShow: function(win){
            var win = $(win);
            win.addClass("ani-swoopInTop");
            setTimeout(function(){
                $(win).removeClass("ani-swoopInTop");
            }, 1000);
        },
        onClose: function(win){
            var win = $(win);
            win.addClass("ani-swoopOutTop");
        }
    });
}

function createWindowYoutube(){
    Desktop.createWindow({
        resizeable: true,
        draggable: true,
        width: 500,
        icon: "<span class='mif-youtube'></span>",
        title: "Intro Video V2",
        content: "https://google.com",
        clsContent: "bg-dark"
    });
}

function openCharm() {
    var charm = $("#charm").data("charms");
    charm.toggle();
}

$(".window-area").on("click", function(){
    Metro.charms.close("#charm");
});

$(".charm-tile").on("click", function(){
    $(this).toggleClass("active");
});