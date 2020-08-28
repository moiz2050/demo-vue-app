class Locations {
    constructor() {
        this.baseUrl = 'http://localhost:4000'
    }

    all(then) {
        return fetch(`${this.baseUrl}/api/locations`, {
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => then(data));
    }
}

export default Locations;