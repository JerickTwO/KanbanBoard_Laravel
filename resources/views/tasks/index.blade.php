
    <body>
        <div class="board">
            <form id="todo-form" method="POST">
            @csrf
                <input type="text" placeholder="New TODO..." id="todo-input" />
                <button type="submit">
                    <a href="{{route('')}}" method()>
                        Add +
                    </a></button>
            </form>
            <div class="lanes">
                <div class="swim-lane" id="todo-lane">
                    <div class="lane_title">
                        <h2 class="heading_1">TODO</h2>
                    </div>
                </div>

                <div class="swim-lane">
                    <div class="lane_title">
                        <h2 class="heading_2">DOING</h2>
                    </div>
                </div>

                <div class="swim-lane">
                    <div class="lane_title">
                        <h2 class="heading_3">DONE</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <style>

            /* ---- RESET/BASIC STYLING ---- */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;  
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        
        *::-webkit-scrollbar {
            display: none;
        }

        body{
            display: flex;
            background-color: rgb(50, 50, 50);
            font-family: sans-serif;  
            height: 100%;
            justify-content: center;
        }

        .board {
            padding: 32px;
            gap: 16px;

            width: 1200px;
            overflow: scroll;
        }

        /* ---- FORM ---- */


        #todo-form input {
            padding: 12px;
            margin-right: 12px;
            width: 225px;
            border-radius: 4px;
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
            background-color: #151515;
            color: #fff;
            font-size: 14px;
            outline: none;
            &:focus{
                background-color: #181818;
            }    
        }

        #todo-form button {
            padding: 12px 20px;
            border-radius: 4px;
            border: none;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
            color: rgb(233, 233, 233);
            background-color:#2b593f;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
        }

        /* ---- BOARD ---- */
        .lanes {
            display: flex;
            align-items: flex-start;
            justify-content: start;
            gap: 16px;
            overflow: scroll;
            height: 100%;
            margin-top: 40px;
        }

        .swim-lane {
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.25);
            padding: 12px;
            border-radius: 4px;
            width: 500px;
            min-height: 120px;
        }

        .swim-lane{
            display: flex;
            flex-direction: column;
            gap: 12px;  
        }
        .swim-lane:first-child {
            background-color: rgb(28 28 28);
            .task{
                background-color: rgb(47 47 47);

            }
            .lane_title{
                background-color:#5a5a5a;
            }
        }

        .swim-lane:nth-child(2) {
            background-color: rgb(27 31 34);
            .task{
                background-color: rgb(28 57 80);
                
            }
            .lane_title{
                background-color:#28456c;
            }
        }
        .swim-lane:last-child {
            background-color:#1d2220;
            .lane_title{
                background-color:#2b593f;
            }
            .task{
                background-color: rgb(35 49 42);
                
            }
        }

        .lane_title{
            font-size: 10px;
            font-weight: bold;
            max-width: max-content;
            padding: 4px 10px;
            color: #ffffff;
            border-radius: 6px
        }


        .task {
            color: #fefefe;
            box-shadow: 0px 5px 15px rgba(90, 90, 90, 0.15);
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            cursor: grab;
        }

        /* CHANGE THE COLOR IN DRAG */
        .is-dragging {
            scale: 1.05;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.38);
            background-color: #ffffff !important;
            color: #151515;

        }
        a{
            te
        }
    </style>