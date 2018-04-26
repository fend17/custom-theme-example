console.log('Hello World!');

function main(){
  fetch('wp-json/wp/v2/categories')
    .then(res => res.json())
    .then((posts) => {
      console.log(posts);
    });
}

main();