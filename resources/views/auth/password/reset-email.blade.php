<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

    body{
    font-family: 'Inter', sans-serif;
    }
</style>

<x-layout>
    <div style="display: flex; justify-content: center; align-items: center; text-align: center; flex-direction: column; min-height: 100vh">
        
      <x-assets.email-image/>
        
        <h1 style="font-size: 25px; font-weight: 900; margin-top: 40px;">Recover password</h1>
        <p style="font-size: 18px; padding-bottom: 22px;">click this button to verify your email </p>
        <a  style ="background: #0FBA68; 
                    border-radius: 8px;
                    padding: 19px 109px;
                    text-decoration: none;
                    color: #fff;
                    font-size: 16px;
                    font-weight: 900;
                    }"
            href="{{$url}}"
        >RECOVER PASSWORD
        </a>
    </div>
</x-layout>