// RECENT POSTS REQUEST WITH FETCH API //

const formatDate = function (date) {
  let splitDate = date.split("T");
  let dateArray = splitDate[0].split("-");
  // replace the month value
  switch (dateArray[1]) {
    case "01":
      dateArray[1] = "Enero";
      break;
    case "02":
      dateArray[1] = "Febrero";
      break;
    case "03":
      dateArray[1] = "Marzo";
      break;
    case "04":
      dateArray[1] = "Abril";
      break;
    case "05":
      dateArray[1] = "Mayo";
      break;
    case "06":
      dateArray[1] = "Junio";
      break;
    case "07":
      dateArray[1] = "Julio";
      break;
    case "08":
      dateArray[1] = "Agosto";
      break;
    case "09":
      dateArray[1] = "Septiembre";
      break;
    case "10":
      dateArray[1] = "Octubre";
      break;
    case "11":
      dateArray[1] = "Noviembre";
      break;
    case "12":
      dateArray[1] = "Diciembre";
      break;
  }

  return dateArray;
};

const headers = new Headers({
  "Content-Type": "application/json",
  Accept: "application/json, text-plain, */*",
});
const fetchInit = {
  method: "get",
  headers: headers,
  mode: "cors",
  credentials: "same-origin",
};

const appendPosts = function (posts) {
  const postsContainer = document.getElementById("recentPostsContainer");

  if (postsContainer) {
    posts.forEach((post) => {
      // post card
      const card = document.createElement("div");
      card.classList.add("col-md-4", "mb-md-0", "mb-4");
      // post thumbnail
      const thumbnail = document.createElement("a");
      thumbnail.setAttribute("href", post.link);
      const img = document.createElement("div");
      img.classList.add("img-card-rectangle", "mb-2");
      // fetching image
      fetch(
        "http://testbed.raidho.mx/supertasas/blog/wp-json/wp/v2/media/" +
          post.featured_media,
        fetchInit
      )
        .then((response) => response.json())
        .then((data) => {
          //img.style.backgroundImage = "url(" + data.source_url + ")";
          img.style.backgroundImage =
            "url(" + data.media_details.sizes.medium_large.source_url + ")";
        })
        .catch((error) => {
          //alert(error);
          console.log(error);
        });
      thumbnail.appendChild(img);
      // post categories
      const categories = document.createElement("p");
      categories.classList.add("d-block", "is-bold", "c-blue", "txt18", "pb-2");
      categories.innerHTML = "";
      // fetching categories
      fetch(
        "http://testbed.raidho.mx/supertasas/blog/wp-json/wp/v2/categories?post=" +
          post.id,
        fetchInit
      )
        .then((response) => response.json())
        .then((data) => {
          data.forEach((category) => {
            categories.innerText += category.name + " ";
          });
        })
        .catch((error) => {
          //alert(error);
          console.log(error);
        });
      // post title
      const title = document.createElement("a");
      title.setAttribute("href", post.link);
      const p = document.createElement("p");
      p.classList.add("is-bold", "c-dark-blue", "txt24", "mb-2");
      const t1 = document.createTextNode(post.title.rendered);
      p.appendChild(t1);
      title.appendChild(p);
      // post date
      const date = document.createElement("p");
      date.classList.add("c-dark-gray", "text-capitalize");
      const dateText = formatDate(post.date);
      const t2 = document.createTextNode(
        dateText[1] + " " + dateText[2] + ", " + dateText[0]
      );
      date.appendChild(t2);
      title.appendChild(date);

      card.appendChild(thumbnail);
      card.appendChild(categories);
      card.appendChild(title);

      postsContainer.appendChild(card);
    });
  }
};

const fetchPosts = function () {
  const url =
    "http://testbed.raidho.mx/supertasas/blog/wp-json/wp/v2/posts?orderby=date&per_page=3";

  fetch(url, fetchInit)
    .then((response) => response.json())
    .then((data) => {
      if (data.length > 0) {
        appendPosts(data);
      }
    })
    .catch((error) => {
      //alert(error);
      console.log(error);
    });
};

window.addEventListener("load", () => {
  fetchPosts();
});
