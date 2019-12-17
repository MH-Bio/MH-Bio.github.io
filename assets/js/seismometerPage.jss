var pswpElement = document.querySelectorAll(".pswp")[0];

// build items array
var items = [
  {
    src:
      "http://michael-hernandez.info/images/Seismometer/Seismometer_Schematic.jpg",
    w: 1916,
    h: 913,
  },
  {
    src: "http://michael-hernandez.info/images/Seismometer/PCB_Schematic.JPG",
    w: 1600,
    h: 800,
  },
  {
    src: "http://michael-hernandez.info/images/Seismometer/BlockDiagaram.png",
    w: 1600,
    h: 396,
  },
  {
    src:
      "http://michael-hernandez.info/images/Seismometer/BreadboardPrototype.JPG",
    w: 4032,
    h: 3024,
  },
  {
    src: "http://michael-hernandez.info/images/Seismometer/PCB_Design.JPG",
    w: 933,
    h: 821,
  },
  {
    src:
      "http://michael-hernandez.info/images/Seismometer/PCB_Design_Bottom.JPG",
    w: 1928,
    h: 1642,
  },
  {
    src: "http://michael-hernandez.info/images/Seismometer/IMG_56541.jpg",
    w: 2048,
    h: 1536,
  },
  {
    src: "http://michael-hernandez.info/images/Seismometer/Final_Circuit.jpg",
    w: 1280,
    h: 960,
  },
  {
    src:
      "http://michael-hernandez.info/images/Seismometer/Seismometer_Poster.jpg",
    w: 4608,
    h: 3456,
  }
];

// define options (if needed)
var options = {
  // history & focus options are disabled on CodePen
  history: false,
  focus: false,

  showAnimationDuration: 0,
  hideAnimationDuration: 0
};

var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
gallery.init();
gallery.options.closeOnScroll = false;
gallery.options.escKey = true;
gallery.options.closeOnVerticalDrag= false;
