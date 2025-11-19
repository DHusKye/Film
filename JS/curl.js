const options = {
  method: 'GET',
  headers: {
    accept: 'application/json',
    Authorization: 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJkZjkwNDcxNmQ3MTgxN2NlYjJiYWY4NWJhN2U2YjZhZiIsIm5iZiI6MTc2MjkzNTgzNy4wMDE5OTk5LCJzdWIiOiI2OTE0NDQxYzc4NGIzMDA1Y2NkZDJmYzQiLCJzY29wZXMiOlsiYXBpX3JlYWQiXSwidmVyc2lvbiI6MX0.HSt9X9XUou6pbpD2dowmZtCBrPG3C3yN1UnXQzjF8_U'
  }
};

fetch('https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=1&sort_by=popularity.desc', options)
  .then(res => res.json())
    .then(data => {
        const typeContainer = document.getElementById('container');
        films = data.results;
        // console.log(data);
        films.forEach(film => {
            const typeDiv = document.createElement('div');
            typeDiv.classList.add('film-card');

            const image = document.createElement('img');
            image.src = `https://image.tmdb.org/t/p/w500${film.poster_path}`;
            image.alt = film.title;

            const intDiv = document.createElement('div');
            intDiv.classList.add('film-card-body');

            const titre = document.createElement('h3');
            titre.classList.add('film-card-title');
            titre.textContent = film.title;

            const description = document.createElement('p');
            description.classList.add('film-card-description');
            description.textContent = film.overview;


            typeContainer.appendChild(typeDiv);
            typeDiv.appendChild(image);
            typeDiv.appendChild(intDiv);
            intDiv.appendChild(titre);
            intDiv.appendChild(description)
        });

    });