// Change navbar styles on scroll

window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})




// display / hide nav menu
const menu = document.querySelector(".nav_menu");
const menuBtn = document.querySelector("#open-menu-btn");
// const searchbox = document.querySelector(".searchbox");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    // searchbox.style.display = "none";
    menuBtn.style.display = "none";
})

// close nav menu
const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    // searchbox.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)

// a script for google language translation 


// a script for bacground image slider 

var makeBSS = function (el, options) {
    var $slideshows = document.querySelectorAll(el), // a collection of all of the slideshow
        $slideshow = {},
        Slideshow = {
            init: function (el, options) {
                this.counter = 0; // to keep track of current slide
                this.el = el; // current slideshow container    
                this.$items = el.querySelectorAll('figure'); // a collection of all of the slides, caching for performance
                this.numItems = this.$items.length; // total number of slides
                options = options || {}; // if options object not passed in, then set to empty object 
                options.auto = options.auto || false; // if options.auto object not passed in, then set to false
                this.opts = {
                    auto: (typeof options.auto === "undefined") ? false : options.auto,
                    speed: (typeof options.auto.speed === "undefined") ? 1500 : options.auto.speed,
                    pauseOnHover: (typeof options.auto.pauseOnHover === "undefined") ? false : options.auto.pauseOnHover,
                    fullScreen: (typeof options.fullScreen === "undefined") ? false : options.fullScreen,
                    swipe: (typeof options.swipe === "undefined") ? false : options.swipe
                };

                this.$items[0].classList.add('bss-show'); // add show class to first figure 
                this.injectControls(el);
                this.addEventListeners(el);
                if (this.opts.auto) {
                    this.autoCycle(this.el, this.opts.speed, this.opts.pauseOnHover);
                }
                if (this.opts.fullScreen) {
                    this.addFullScreen(this.el);
                }
                if (this.opts.swipe) {
                    this.addSwipe(this.el);
                }
            },
            showCurrent: function (i) {
                // increment or decrement this.counter depending on whether i === 1 or i === -1
                if (i > 0) {
                    this.counter = (this.counter + 1 === this.numItems) ? 0 : this.counter + 1;
                } else {
                    this.counter = (this.counter - 1 < 0) ? this.numItems - 1 : this.counter - 1;
                }

                // remove .show from whichever element currently has it 
                // http://stackoverflow.com/a/16053538/2006057
                [].forEach.call(this.$items, function (el) {
                    el.classList.remove('bss-show');
                });

                // add .show to the one item that's supposed to have it
                this.$items[this.counter].classList.add('bss-show');
            },
            injectControls: function (el) {
                // build and inject prev/next controls
                // first create all the new elements
                var spanPrev = document.createElement("span"),
                    spanNext = document.createElement("span"),
                    docFrag = document.createDocumentFragment();

                // add classes
                spanPrev.classList.add('bss-prev');
                spanNext.classList.add('bss-next');

                // add contents
                spanPrev.innerHTML = '&laquo;';
                spanNext.innerHTML = '&raquo;';

                // append elements to fragment, then append fragment to DOM
                docFrag.appendChild(spanPrev);
                docFrag.appendChild(spanNext);
                el.appendChild(docFrag);
            },
            addEventListeners: function (el) {
                var that = this;
                el.querySelector('.bss-next').addEventListener('click', function () {
                    that.showCurrent(1); // increment & show
                }, false);

                el.querySelector('.bss-prev').addEventListener('click', function () {
                    that.showCurrent(-1); // decrement & show
                }, false);

                el.onkeydown = function (e) {
                    e = e || window.event;
                    if (e.keyCode === 37) {
                        that.showCurrent(-1); // decrement & show
                    } else if (e.keyCode === 39) {
                        that.showCurrent(1); // increment & show
                    }
                };
            },
            autoCycle: function (el, speed, pauseOnHover) {
                var that = this,
                    interval = window.setInterval(function () {
                        that.showCurrent(1); // increment & show
                    }, speed);

                if (pauseOnHover) {
                    el.addEventListener('mouseover', function () {
                        interval = clearInterval(interval);
                    }, false);
                    el.addEventListener('mouseout', function () {
                        interval = window.setInterval(function () {
                            that.showCurrent(1); // increment & show
                        }, speed);
                    }, false);
                } // end pauseonhover

            },
            addFullScreen: function (el) {
                var that = this,
                    fsControl = document.createElement("span");

                fsControl.classList.add('bss-fullscreen');
                el.appendChild(fsControl);
                el.querySelector('.bss-fullscreen').addEventListener('click', function () {
                    that.toggleFullScreen(el);
                }, false);
            },
            addSwipe: function (el) {
                var that = this,
                    ht = new Hammer(el);
                ht.on('swiperight', function (e) {
                    that.showCurrent(-1); // decrement & show
                });
                ht.on('swipeleft', function (e) {
                    that.showCurrent(1); // increment & show
                });
            },
            toggleFullScreen: function (el) {
                // https://developer.mozilla.org/en-US/docs/Web/Guide/API/DOM/Using_full_screen_mode
                if (!document.fullscreenElement &&    // alternative standard method
                    !document.mozFullScreenElement && !document.webkitFullscreenElement &&
                    !document.msFullscreenElement) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                        el.requestFullscreen();
                    } else if (document.documentElement.msRequestFullscreen) {
                        el.msRequestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        el.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        el.webkitRequestFullscreen(el.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    }
                }
            } // end toggleFullScreen

        }; // end Slideshow object 

    // make instances of Slideshow as needed
    [].forEach.call($slideshows, function (el) {
        $slideshow = Object.create(Slideshow);
        $slideshow.init(el, options);
    });
};
var opts = {
    auto: {
        speed: 5000,
        pauseOnHover: true
    },
    fullScreen: true,
    swipe: true
};
makeBSS('.demo1', opts);


// ended for background image slider


// a script for back to top

// window.addEventListener('scroll', () =>{
//     document.querySelector('button #myBtn').classList.toggle('window-scroll-d', window.scrollY > 5000 )
// })

// end of back to top button

// // getting HTML elements
// const nav = document.querySelector("nav"),
//     toggleBtn = nav.querySelector(".toggle-btn");

// toggleBtn.addEventListener("click", () => {
//     nav.classList.toggle("open");
// });

// // js code to make draggable nav
// function onDrag({ movementY }) { //movementY gets mouse vertical value
//     const navStyle = window.getComputedStyle(nav), //getting all css style of nav
//         navTop = parseInt(navStyle.top), // getting nav top value & convert it into string
//         navHeight = parseInt(navStyle.height), // getting nav height value & convert it into string
//         windHeight = window.innerHeight; // getting window height

//     nav.style.top = navTop > 0 ? '${navTop + movementY}px' : "1px";
//     if (navTop > windHeight - navHeight) {
//         nav.style.top = `${windHeight - navHeight}px`;
//     }
// }

// //this function will call when user click mouse's button and  move mouse on nav
// nav.addEventListener("mousedown", () => {
//     nav.addEventListener("mousemove", onDrag);
// });

// //these function will call when user relase mouse button and leave mouse from nav
// nav.addEventListener("mouseup", () => {
//     nav.removeEventListener("mousemove", onDrag);
// });
// nav.addEventListener("mouseleave", () => {
//     nav.removeEventListener("mousemove", onDrag);
// });



