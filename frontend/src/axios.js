import Axios from 'axios';


const axios = Axios.create({
	baseURL: "http://localhost:8000/api",
	withCredentials: true,
	headers: {
		"Content-Type": "application/json",
		"Accept": "application/json"
	},
});

axios.interceptors.request.use((config) => {
	// Getting and setting XSRF token in request headers
	// Using decodeURIComponent to handle special characters 
	config.headers['X-XSRF-TOKEN'] = decodeURIComponent(getCookie('XSRF-TOKEN'))
	return config
  })
  
  // Utility function to retrieve a cookie value by name
  function getCookie(name){
	const cookies = document.cookie.split(';')
	for (const cookie of cookies) {
	  const [key, value] = cookie.split('=')
	  if (key.trim() === name)
		return value
	}
	return ''
  }

export default axios;
