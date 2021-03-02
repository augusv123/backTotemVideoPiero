<template>
  <div class="bg-gray-100 py-6">
    <!-- empiezo nueva tabla -->
    <div class="my-6 mx-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-7"><div class="col-start-3 col-span-3">
      <label for="username" class="block text-sm font-medium text-gray-700">
        Identificacion tablet
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          Identificacion de tableta
        </span> <input type="text"  v-model="form.identificacion"  class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div> 
        <div class="col-span-1 col-span-3">
          <label for="username" class="block text-sm font-medium text-gray-700">
        Descripcion
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          Nombre del producto
        </span> <input type="text"    v-model="form.descripcion"  class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div> 
        <div class="col-start-5 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Descripcion
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          Nombre del segundo producto
        </span> <input type="text"  v-model="form.descripcion2"   class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div> 
        <div class="col-span-1 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Video
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          Ruta del Video
        </span> <input type="text"  v-model="form.video1"  class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div> 
        <div class="col-start-5 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Video del segundo prod.
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          Ruta del Video
        </span> <input type="text"  v-model="form.video2"   class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div>
        <div class="col-span-1 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Qr1
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          URL
        </span> <input type="text"  v-model="form.qr1"  class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div>
        <div class="col-span-1 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Qr2
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          URL
        </span> <input type="text"  v-model="form.qr2"  class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div></div>
        <div class="col-start-5 col-span-3">
          <label for="username" class="block text-sm font-medium text-gray-700">Qr1 segundo prod.</label>
           <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          URL
        </span> <input type="text"  v-model="form.qr1video2"   class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div>
        <div class="col-start-5 col-span-3"><label for="username" class="block text-sm font-medium text-gray-700">
        Qr 2 segundo prod.
      </label> <div class="mt-1 flex rounded-md shadow-sm"><span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
          URL
        </span> <input type="text" v-model="form.qr2video2"   class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"></div></div></div>
        <div class="col-start-3 col-span-3"><div class="mt-8 flex rounded-md shadow-sm bg-blue-500">
          <button class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-blue-300"  v-on:click="nuevaTablet()">
          Crear </button>
          </div>
          </div>
          </div>
    <!-- aca termina -->
    <!-- <div class="my-6 mx-2 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-7">
      <div class="sm:col-span-2">
        <label for="username" class="block text-sm font-medium text-gray-700">
          Descripcion
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
          <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
          >
            Identificacion de tableta
          </span>
          <input
            type="text"
            
            
            v-model="form.descripcion"
            
            class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
          />
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="username" class="block text-sm font-medium text-gray-700">
          Video
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
          <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
          >
            URL
          </span>
          <input
            type="text"
            
            
            v-model="form.video1"
            class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
          />
        </div>
        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium text-gray-700">
            QR
          </label>
          <div class="mt-1 flex rounded-md shadow-sm">
            <span
              class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
            >
              URL
            </span>
            <input
              type="text"
              name="qr1"
              id="qr1"
              v-model="form.qr1"
              class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
            />
          </div>
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="username" class="block text-sm font-medium text-gray-700">
          Video 2
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
          <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
          >
            URL
          </span>
          <input
            type="text"
            
            
            v-model="form.video2"
            
            class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
          />
        </div>
        <div class="sm:col-span-2">
          <label for="username" class="block text-sm font-medium text-gray-700">
            Qr 2
          </label>
          <div class="mt-1 flex rounded-md shadow-sm">
            <span
              class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm"
            >
              URL
            </span>
            <input
              type="text"
              name="qr2"
              id="qr2"
              v-model="form.qr2"
              class="flex-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300"
            />
          </div>
        </div>
      </div>
      <div class="sm:col-span-1">
        <div class="mt-8 flex rounded-md shadow-sm bg-blue-500">
          <button
            class="flex-1 focus:ring-blue-500 focus:border-blue-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-blue-300"
            v-on:click="nuevaTablet()"
          >
            Crear
          </button>
        </div>
      </div>
    </div> -->
  
 
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div
            class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
          >
            <div
              class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
            >
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th
                      scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      ID
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Descripcion
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Video
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Video2
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                      <span class="sr-only">Editar</span>
                    </th>
                  </tr>
                </thead>
                <tbody x-max="2">
                  <!-- Even row -->
                  <tr
                    class="bg-gray-50"
                    v-for="tablet in tablets"
                    :key="tablet.id"
                  >
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"
                    >
                      {{ tablet.id }}
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      {{ tablet.identificacion }}
                    </td>
                         <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      {{ tablet.descripcion }}
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      {{ tablet.video1 }}
                    </td>
                         <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      {{ tablet.descripcion2 }}
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      {{ tablet.video2 }}
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                    >
                      <a
                        href="#"
                        class="text-red-600 hover:text-indigo-900"
                        @click="borrarTablet(tablet.id)"
                        >Eliminar</a
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["username"],
  data() {
    return {
      form: this.$inertia.form({
        descripcion: "",
        video1: "",
        video2: "",
        qr: "",
        qr2: "",
        qr1video2: "",
        qr2video2: "",
        identificacion: "",
      }),
      tablets: [],
    };
  },
  methods: {
    getTablets() {
      axios
        .get("/api/tablets", { withCredentials: true })
        .then(({ data }) => {
          console.log(data);
          this.tablets = data;
          console.log(this.tablets);
        })
        .catch((err) => console.error(err));
    },
    nuevaTablet() {
      var data = {
        identificacion: this.form.identificacion,
        descripcion: this.form.descripcion,
        descripcion2: this.form.descripcion2,
        video1: this.form.video1,
        video2: this.form.video2,
        qr1: this.form.qr1,
        qr2: this.form.qr2,
        qr1video2: this.form.qr1video2,
        qr2video2: this.form.qr2video2,
      };
      axios
        .post("/api/tablets", data)
        .then(({ data }) => {
          console.log(data);
          this.getTablets();
        })
        .catch((err) => console.error(err));
    },
    borrarTablet(tabletID) {
      axios
        .delete("/api/tablets/" + tabletID)
        .then(({ data }) => {
          console.log(data);
          this.getTablets();
        })
        .catch((err) => console.error(err));
    },
  },
  created() {
    this.getTablets();
  },
};
</script>
