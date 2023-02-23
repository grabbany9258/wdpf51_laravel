require("./bootstrap");

import { createApp } from "vue";
import Front from "./Front.vue";
import router from "./routes";
const app = createApp({});

app.component("front-page", Front);
app.use(router);
app.mount("#app");
