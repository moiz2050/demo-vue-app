class Services {
    constructor() {
        this.baseUrl = 'http://localhost:4000'
    }

    all(then) {
        return fetch(`${this.baseUrl}/api/services`, {
            headers: {
                'Content-Type': 'application/json'
            }
        })
            .then(response => response.json())
            .then(data => then(data));
    }
}

export default Services;