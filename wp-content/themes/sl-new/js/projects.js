const world = document.querySelector(".canvas");
const { Engine, Render, Runner, World, Bodies } = Matter;

let engine = Engine.create();


const textures = [
    "http://localhost:8888/wp-content/uploads/2022/03/shape1.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape2.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape3.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape4.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape5.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape6.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape7.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape8.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape9.svg",
    "http://localhost:8888/wp-content/uploads/2022/03/shape10.svg"];

function init() {
    let width = $(window).width();
    let height = $(document).height();
    // let vmin = Math.min(width, height);

    engine.events = {};
    World.clear(engine.world);
    Engine.clear(engine);
    engine = Engine.create();

    let render = Render.create({
        canvas: world,
        engine: engine,
        options: {
            wireframes: false,
            background: 'transparent',
            width: width,
            height: height
        }
    });

    World.add(engine.world, [
        Bodies.rectangle(width / 2, height + 50, width, 100, {
            isStatic: true,
            render: {
                fillStyle: "green"
            }
        }),

        Bodies.rectangle(-50, height / 2, 100, height, {
            isStatic: true
        }),
        Bodies.rectangle(width + 50, height / 2, 100, height, {
            isStatic: true
        }),
    ]);

   function createBall() {

        const ORIGINAL_SIZE = 120;
        const SIZE = Math.floor(Math.random() * 76) + 120;
        const ball = Bodies.circle(Math.round(Math.random() * width), -30, 29, {
            angle: Math.PI * (Math.random() * 2 - 1),
            friction: 0.001,
            frictionAir: 0.01,
            restitution: 0.8,
            render: {
                opacity: 0.2,
                sprite: {
                    texture: textures[

                        Math.floor(Math.random() * (textures.length))],
                    xScale: SIZE / ORIGINAL_SIZE,
                    yScale: SIZE / ORIGINAL_SIZE
                }
            }
        });

        setTimeout(() => {
            World.remove(engine.world, ball);
        }, 6000);

        return ball;
    }

    Engine.run(engine);

    Render.run(render);
    const handleClick = () => {
        const ball2 = createBall();
        World.add(engine.world, [ball2]);
    };
    setInterval(handleClick, 300)
}

init();

$(window).resize(function () {
    init();
});