
<div class="user">
    <form class="form" action="add" method="POST">
        @csrf
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="email" name="email" placeholder="Email" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>
        
        <button class="btn" type="submit">Add Member</button>
    </form>
</div>


<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
   
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100vh
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
   
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 90px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
   
}

.btn {
    display: block;
    width: 100%;
    padding: 20px;
   
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color:white;
   background:orange;
    transition: 0.3s;
    
    
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}

</style>