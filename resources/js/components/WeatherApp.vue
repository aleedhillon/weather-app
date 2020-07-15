<template>
  <div class="text-white mb-2">
    <div class="places-input text-gray-800">
      <input type="search" id="address" class="form-control" placeholder="Where are we going?" />
      <!-- <p>
        Selected:
        <strong id="address-value">none</strong>
      </p>-->
    </div>
    <div class="weather-container w-128 mt-4 max-w-lg overflow-hidden shadow-lg rounded-lg">
      <div class="current-weather flex items-center justify-between px-6 py-8 bg-gray-900">
        <div class="flex items-center">
          <div>
            <div class="text-6xl font-semibold">{{ currentTemperature.actual }}°C</div>
            <div class="text-center">Feels like {{ currentTemperature.feels }}°C</div>
          </div>

          <div class="mx-5">
            <div class="font-semibold">{{ currentTemperature.summary }}</div>
            <div class="text-sm">{{ location.name }}</div>
          </div>
        </div>
        <div>
          <img class="rounded-full" :src="currentTemperature.icon" alt="Weather Icon" />
        </div>
      </div>
      <!-- end of current weather weather -->
      <div class="future-weather text-sm text-gray-200 bg-gray-800 px-6 py-8 overflow-hidden">
        <div
          v-for="(day, index) in daily"
          :key="day.valid_date"
          class="flex items-center"
          :class="{ 'mt-8' : index > 0 }"
        >
          <div class="w-1/6 text-lg text-gray-200">{{ toDayOfWeek(day.valid_date) }}</div>
          <div class="w-4/6 px-6 flex items-center">
            <div>
              <img class="w-12 h-12" :src="`/img/icons/${day.weather.icon}.png`" alt="Weather Icon" />
            </div>
            <div class="ml-3">{{ day.weather.description }}</div>
          </div>
          <div class="w-1/6 text-right">
            <div>{{ Math.round(day.high_temp) }}°C</div>
            <div>{{ Math.round(day.low_temp) }}°C</div>
          </div>
        </div>
      </div>
    </div>
    <!-- end of weather container -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      loaded: false,
      current: [],
      currentTemperature: {
        actual: "",
        feels: "",
        summary: "",
        icon: "",
        location: ""
      },
      daily: [],
      city: "Lahore",
      location: {
        name: "Lahore, Pakistan"
      }
    };
  },
  mounted() {
    this.fetchCurrentData();
    this.fetchForecastData();

    var placesAutocomplete = places({
      appId: "plYGJK3SLXG5",
      apiKey: "253a6886e25166edd84c5da48ad1e8ef",
      container: document.querySelector("#address")
    }).configure({
      type: "city",
      aroundLatLngViaIP: false
    });

    // var $address = document.querySelector("#address-value");
    placesAutocomplete.on("change", e => {
      // $address.textContent = e.suggestion.value;

      // console.log(e.suggestion);

      this.location.name = `${e.suggestion.name}, ${e.suggestion.country}`;
      this.city = e.suggestion.name;
      // this.location.lat = e.suggestion.latlng.lat;
      // this.location.lng = e.suggestion.latlng.lng;
    });

    // placesAutocomplete.on("clear", function() {
    //   $address.textContent = "none";
    // });
  },
  watch: {
    city: function(newCity, oldCity) {
      this.fetchCurrentData();
      this.fetchForecastData();
    }
  },
  methods: {
    fetchCurrentData() {
      // fetch(`/api/weather_current?lat=${this.location.lat}&lon=${this.location.lng}`)
      fetch(`/api/weather_current?city=${this.city}`)
        .then(response => response.json())
        .then(data => {
          // console.log(data);
          this.currentTemperature.actual = Math.round(data.temp);
          this.currentTemperature.feels = Math.round(data.app_temp);
          this.currentTemperature.summary = data.weather.description;
          this.currentTemperature.icon = `/img/icons/${data.weather.icon}.png`
          // this.currentTemperature.location = data.request.query;
        });
    },
    fetchForecastData() {
      fetch(`/api/weather_forecast?city=${this.city}`)
        .then(response => response.json())
        .then(json => {
          json.data.shift();
          this.daily = json.data;
          // this.loaded = true;
        });
    },
    toDayOfWeek(day) {
      const date = new Date(day);
      return ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"][date.getDay()];
    }
  }
};
</script>