const textures = [
"http://localhost:8888/wp-content/uploads/2022/03/ball1.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball2.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball3.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball4.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball5.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball6.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball7.png",
"http://localhost:8888/wp-content/uploads/2022/03/ball8.png"];

const {Engine, Render, Runner, Body, Events, Composite, Composites, Common, MouseConstraint, Mouse, World,Bodies} = Matter

let engine = Engine.create()

// where is matter being deployed
const sectionTag = document.querySelector("section.introduction")
  
function init() {

  let w = window.innerWidth
  let h = window.innerHeight

  engine.events = {};
  World.clear(engine.world);
  Engine.clear(engine);
  engine = Engine.create();
  
  const world = engine.world;
  let renderer = Render.create({
    element: sectionTag,
    engine: engine,
    options: {
      height: h,
      width: w,
      background: false,
      wireframes: false,
      pixelRatio: window.devicePixelRatio
    }
  })
  
     Render.run(renderer);
  
    // create runner
    var runner = Runner.create();
    Runner.run(runner, engine);
  
    const wallOptions = {
      isStatic: true,
      render: {
        visible: false
      }
    }
  
      // add bodies
    World.add(world, [
        Bodies.rectangle(w / 2, h + 50, w + 100, 100, wallOptions),
        Bodies.rectangle(w / 2, -50, w + 100, 100, wallOptions),
        Bodies.rectangle(-50, h / 2, 100, h + 100, wallOptions),
        Bodies.rectangle(w + 50, h / 2, 100, h + 100, wallOptions)
    ]);
  
        var explosion = function(engine) {
          var bodies = Composite.allBodies(engine.world);
  
          for (var i = 0; i < bodies.length; i++) {
              var body = bodies[i];
  
              if (!body.isStatic && body.position.y >= 500) {
                  var forceMagnitude = 0.05 * body.mass;
  
                  Body.applyForce(body, body.position, {
                      x: (forceMagnitude + Common.random() * forceMagnitude) * Common.choose([1, -1]), 
                      y: -forceMagnitude + Common.random() * -forceMagnitude
                  });
              }
          }
      };
  
          var timeScaleTarget = 1,
          counter = 0;
  
  
      Events.on(engine, 'afterUpdate', function(event) {
          // tween the timescale for bullet time slow-mo
          engine.timing.timeScale += (timeScaleTarget - engine.timing.timeScale) * 0.2;
  
          counter += 1;
  
          // every 1.5 sec
          if (counter >= 60 * 1.5) {
  
              // flip the timescale
              if (timeScaleTarget < 0.5) {
                  timeScaleTarget = 0.5;
              } else {
                  timeScaleTarget = 0.2;
              }
  
              // create some random forces
              explosion(engine);
  
              // reset counter
              counter = 0;
          }
      });
  
      World.add(world, Composites.stack(w * 0.4, 50, 5, 3, 0, 0, function(x, y) {
        var bodyOptions = {
          frictionAir: 0, 
          friction: 0.0001,
          restitution: 0.8,
          render: {
             sprite: {
                xScale: 0.5,
                yScale: 0.5,
                texture: textures[
                      Math.floor(Math.random() * (textures.length))]
                  }
              }
      };
          switch (Math.round(Common.random(0, 1))) {
  
          case 0:
              if (Common.random() < 0.8) {
                  return Bodies.rectangle(x, y, Common.random(20, 50), Common.random(20, 50), bodyOptions);
              } else {
                  return Bodies.rectangle(x, y, Common.random(80, 120), Common.random(20, 30), bodyOptions);
              }
          case 1:
              return Bodies.polygon(x, y, Math.round(Common.random(4, 8)), Common.random(20, 50), bodyOptions);
  
          }
      }));
      
  
      // add mouse control
      var mouse = Mouse.create(renderer.canvas),
          mouseConstraint = MouseConstraint.create(engine, {
              mouse: mouse,
              constraint: {
                  stiffness: 0.2,
                  render: {
                      visible: false
                  }
              }
          });

    mouseConstraint.mouse.element.removeEventListener("mousewheel", mouseConstraint.mouse.mousewheel);
    mouseConstraint.mouse.element.removeEventListener("DOMMouseScroll", mouseConstraint.mouse.mousewheel);
  
    World.add(world, mouseConstraint);
  
  
  // run both the engine, and the renderer
  Matter.Runner.run(engine) 
  Render.run(renderer)

  console.log(w, h)

}
 
init();


$(window).resize(function () {
    init();
});