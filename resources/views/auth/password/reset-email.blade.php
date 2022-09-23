<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

    body{
    font-family: 'Inter', sans-serif;
    overflow-x: hidden;
    }

    div{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
        min-height: 100vh;
    }


    h1{
        font-size: 25px;
        font-weight: 900;
        margin-top: 40px;
    }

    p{
        font-size: 18px;
        padding-bottom: 22px;
    }
    a{
        background: #0FBA68; 
        border-radius: 8px;
        padding: 19px 109px;
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        font-weight: 900;
    }

    @media(max-width: 675px) {
        div{
            padding:16px;
        }
        h1{
            font-size: 20px;
        }
        p{
            font-size: 16px;
        }
        a{
            font-size: 14px;
            padding: 15px 70px;
            white-space: nowrap;
            text-align: center;
            margin: 20px;
            max-width: 100%;
          
        }
    }
</style>

<x-layout>
    <div>
        
      <x-assets.email-image/>
        
        <h1>Recover password</h1>
        <p>click this button to verify your email </p>
        <a href="{{$url}}">
            RECOVER PASSWORD
        </a>
    </div>
</x-layout>