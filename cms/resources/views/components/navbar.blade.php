<div class="w-screen bg-sky-800 text-white p-5">
    <div class="flex justify-between items-center px-5">
    <h1 class="text-2xl font-semibold ml-5">Lorem</h1>
      <div class="flex gap-5 text-xl">
            <a
              class="{{ request()->is('/lodgigns') ? 'py-2 px-3 bg-sky-950 rounded cursor-pointer font-bold' : 'py-2 px-3 hover:bg-sky-950 rounded cursor-pointer font-bold' }}"
              href="/lodgings"
            >
              Home
            </a>
            <a
              class="{{ request()->is('/lodgigns/{id}') ? 'py-2 px-3 bg-sky-950 rounded cursor-pointer font-bold' : 'py-2 px-3 hover:bg-sky-950 rounded cursor-pointer font-bold' }}"
              {{-- href="/lodgigns/{}" --}}
            >
              Add Lodging
            </a>
        <a
          class="{{ request()->is('') ? 'py-2 px-3 bg-sky-950 rounded cursor-pointer font-bold' : 'py-2 px-3 hover:bg-sky-950 rounded cursor-pointer font-bold' }}"
        >
          Log Out
        </a>
      </div>
      <div>
          <form action="">
            <div class="flex items-center">
              <input
                type="text"
                class="rounded p-2 border mt-2 focus:outline-none focus:ring-1 ring-sky-500 text-lg"
                placeholder="Search"
              />
              <button
                class="py-2 px-3 bg-sky-800 text-base rounded font-semibold text-white ml-3"
                type="submit"
              >
                Search
              </button>
            </div>
          </form>
      </div>
    </div>
  </div>