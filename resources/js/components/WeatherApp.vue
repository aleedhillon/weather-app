<template>
  <div class="text-white mb-8">
    <div class="places-input text-gray-800">
      <label for="search" class="block text-center">Search your city</label>
      <input type="text" id="search" class="block w-128 rounded-lg" />
    </div>
    <div class="weather-container w-128 mt-4 max-w-lg overflow-hidden shadow-lg rounded-lg">
      <div class="current-weather flex items-center justify-between px-6 py-8 bg-gray-900">
        <div class="flex items-center">
          <div>
            <div class="text-6xl font-semibold">8°C</div>
            <div class="text-center">Feels like 5°C</div>
          </div>

          <div class="mx-5">
              <div class="font-semibold">Cloudy</div>
              <div>Lahore, Pakistan</div>
          </div>
        </div>
        <div>Icon</div>
      </div>
      <!-- end of current weather weather -->
      <div class="future-weather text-sm text-gray-200 bg-gray-800 px-6 py-8 overflow-hidden">
          <div class="flex items-center">
              <div class="w-1/6 text-lg text-gray-200">MON</div>
              <div class="w-4/6 px-4 flex items-center">
                <div>icon</div>
                <div class="ml-3">Cloudy with a chance of showers</div>
              </div>
              <div class="w-1/6 text-right">
                <div>10°C</div>
                <div>2°C</div>
              </div>
          </div>
          <div class="flex items-center mt-8">
              <div class="w-1/6 text-lg text-gray-200">TUE</div>
              <div class="w-4/6 px-4 flex items-center">
                <div>icon</div>
                <div class="ml-3">Cloudy with a chance of showers</div>
              </div>
              <div class="w-1/6 text-right">
                <div>10°C</div>
                <div>2°C</div>
              </div>
          </div>
          <div class="flex items-center mt-8">
              <div class="w-1/6 text-lg text-gray-200">WED</div>
              <div class="w-4/6 px-4 flex items-center">
                <div>icon</div>
                <div class="ml-3">Cloudy with a chance of showers</div>
              </div>
              <div class="w-1/6 text-right">
                <div>10°C</div>
                <div>2°C</div>
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
      location: {
        name: 'Lahore, Pakistan',
        lat: 29.7967141,
        lon: 72.8385824
      }
    }
  },
  mounted() {
    this.fetchData()
  },
  methods: {
      fetchData() {
          fetch(`/api/weather?lat=${this.location.lat}&lon=${this.location.lon}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
      }
  }
};
</script>