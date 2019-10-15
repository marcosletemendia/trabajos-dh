SELECT genres.name, movies.title
FROM movies
INNER JOIN genres ON genre_id = genres.id
ORDER BY genres.name;

select movies.title, genres.name, actors.first_name, actors.last_name
from movies
inner join genres on genre_id = genres.id
inner join actor_movie on movie_id = movies.id
inner join actors on actor_id = actors.id
order by title;

select first_name, last_name, title
from actors
inner join actor_movie on actor_id = actors.id
inner join movies on movie_id = movies.id
order by first_name;

select title, name
from movies
left join genres on genre_id = genres.id
union -- ANOTAR ESTO EN CUADERNO
select title, name
from movies
right join genres on genre_id = genres.id
order by title;

select episodes.title, seasons.number, seasons.title, series.title, genres.name, count(actors.first_name)
from episodes
inner join seasons on season_id = seasons.id
inner join series on serie_id = series.id
left join genres on series.genre_id = genres.id
inner join actor_episode on episode_id = episodes.id
inner join actors on actor_id = actors.id
group by episodes.title;

select genres.name, avg(movies.rating)
from genres
left join movies on genre_id = genres.id
where movies.rating > 5
group by genres.name;
-- estoy comentando

select series.title, seasons.title, episodes.title, episodes.release_date, count(episodes.title)
from episodes
inner join seasons on season_id = seasons.id
inner join series on seasons.serie_id = series.id
where year(episodes.release_date) = 2016
group by series.title;

select series.title, seasons.title, episodes.title, episodes.release_date, count(episodes.title)
from episodes
inner join seasons on season_id = seasons.id
inner join series on seasons.serie_id = series.id
where year(episodes.release_date) = year(now()) -- no va a haber ninguna
group by series.title;