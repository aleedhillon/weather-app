# Weather App

## Details

This is a weather cheking app which shows current weather and weather forecasts for the selected city and is developed using Laravel, VueJS, Tailwind-CSS and Algolia Places.

### Live app
Check the live app at [Alee Weather App](http://alee-weather-app.herokuapp.com/)

## How to install

- Clone the repository with __`git clone https://github.com/aliadhillon/weather-app.git`__
- Copy __`.env.example`__ file to __`.env`__
- Run __`composer install`__
- Run __`php artisan key:generate --ansi`__
- Run __`npm install && npm run dev`__
- Create free account on [Weatherbit](https://www.weatherbit.io/) and get the API Key
  and set it in the __`.env`__ file as __`WEATHER_BIT_API_KEY`__
- That's it: launch with __`php artisan serve`__ 
