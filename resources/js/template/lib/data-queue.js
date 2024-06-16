export default class DataQueue {
    value;

    subscribers = [];

    feed(value) {
        this.value = value;
        this.subscribers.forEach(callback => callback(value));
    }

    current() {
        return this.value;
    }

    onLatest(callback) {
        this.subscribers.push(callback);
    }
}
