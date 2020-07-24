# Weather App

## Details

This is a weather cheking app which shows current weather and weather forecasts for the selected city and is developed using Laravel, VueJS, Tailwind-CSS and Algolia Places.

### Live app
Check the live app at [Alee Weather App](http://alee-weather-app.herokuapp.com/)

## How to use

- Clone the repository with __git clone https://github.com/aliadhillon/weather-app.git__
- Copy __.env.example__ file to __.env__
- Run __composer install__
- Run __php artisan key:generate --ansi__
- Run __npm install && npm run dev__
- Create free account on [Weatherbit](https://www.weatherbit.io/) and get the API Key
  and set it in the __.env__ file as __WEATHER_BIT_API_KEY__
- That's it: launch with __php artisan serve__ 
