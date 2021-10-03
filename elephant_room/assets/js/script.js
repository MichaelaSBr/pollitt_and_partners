//readmore js

// if id in url matches post, then open post on page load
function openPost() {
  let post = document.getElementsByTagName("article");
  let id = window.location.toString().split("#")[1];
  for (let i = 0; i < post.length; i++) {
    if (id === post[i].id) {
      for (let x = 0; x < post[i].childNodes.length; x++) {
        if (post[i].childNodes[x].className == "read-more-wrapper") {
          let first_para = post[i].querySelector(".wp-block-columns");
          // console.log(post[i].childNodes[x]);
          if (window.screen.width <= 500) {
            new Readmore(post[i].childNodes[x], {
              speed: 500,
              lessLink: '<a class="close" href="#"></a>',
              moreLink: '<a class="readmore" href="#">Continue reading...</a>',
              collapsedHeight: first_para.offsetHeight * 2,
              afterToggle: function (trigger, element, expanded) {
                if (!expanded) {
                  // The "Close" link was clicked
                  window.scrollTo({
                    top: element.offsetTop - 500,
                    behavior: "smooth",
                  });
                }
              },
              startOpen: true,
            });
          } else {
            new Readmore(post[i].childNodes[x], {
              speed: 500,
              lessLink: '<a class="close" href="#"></a>',
              moreLink: '<a class="readmore" href="#">Continue reading...</a>',
              collapsedHeight: first_para.offsetHeight,
              afterToggle: function (trigger, element, expanded) {
                if (!expanded) {
                  // The "Close" link was clicked
                  window.scrollTo({
                    top: element.offsetTop - 500,
                    behavior: "smooth",
                  });
                }
              },
              startOpen: true,
            });
          }
        }
      }
    } else {
      for (let x = 0; x < post[i].childNodes.length; x++) {
        if (post[i].childNodes[x].className == "read-more-wrapper") {
          let first_para = post[i].querySelector(".wp-block-columns");
          // console.log(post[i].childNodes[x]);
          if (window.screen.width <= 500) {
            new Readmore(post[i].childNodes[x], {
              speed: 500,
              lessLink: '<a class="close" href="#"></a>',
              moreLink: '<a class="readmore" href="#">Continue reading...</a>',
              collapsedHeight: first_para.offsetHeight,
              afterToggle: function (trigger, element, expanded) {
                if (!expanded) {
                  // The "Close" link was clicked
                  window.scrollTo({
                    top: element.offsetTop - 500,
                    behavior: "smooth",
                  });
                }
              },
              startOpen: false,
            });
          } else {
            new Readmore(post[i].childNodes[x], {
              speed: 500,
              lessLink: '<a class="close" href="#"></a>',
              moreLink: '<a class="readmore" href="#">Continue reading...</a>',
              collapsedHeight: first_para.offsetHeight,
              afterToggle: function (trigger, element, expanded) {
                if (!expanded) {
                  // The "Close" link was clicked
                  window.scrollTo({
                    top: element.offsetTop - 500,
                    behavior: "smooth",
                  });
                }
              },
              startOpen: false,
            });
          }
        }
      }
    }
  }
}

openPost();
window.addEventListener("resize", openPost);
