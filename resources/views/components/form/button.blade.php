@props(['name'])

<button
    type="submit" 
    name="submit"
    class="w-full  py-3 text-center text-lg rounded-lg text-white bg-green font-black"
    >{{ strtoupper($name) }}
</button>