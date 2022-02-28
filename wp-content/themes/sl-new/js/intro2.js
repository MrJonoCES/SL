const textures = [
    "https://i.ibb.co/10znhXj/1.png",
    "https://i.ibb.co/j6QSyZh/2.png",
    "https://i.ibb.co/q0GrJTS/3.png",
    "https://i.ibb.co/F48B1Jp/4.png"];
  
  const {Engine, Render, Runner, Body, Events, Composite, Composites, Common, MouseConstraint, Mouse, World,Bodies} = Matter
  
  // where is matter being deployed
  const sectionTag = document.querySelector("section.introduction")
  
  // what is the width and height of the page
  const w = window.innerWidth
  const h = window.innerHeight
  
  const engine = Engine.create()
  const world = engine.world;
  const renderer = Render.create({
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
          engine.timing.timeScale += (timeScaleTarget - engine.timing.timeScale) * 0.05;
  
          counter += 1;
  
          // every 1.5 sec
          if (counter >= 60 * 1.5) {
  
              // flip the timescale
              if (timeScaleTarget < 1) {
                  timeScaleTarget = 1;
              } else {
                  timeScaleTarget = 0.05;
              }
  
              // create some random forces
              explosion(engine);
  
              // reset counter
              counter = 0;
          }
      });
  
      World.add(world, Composites.stack(50, 50, 8, 3, 0, 0, function(x, y) {
        var bodyOptions = {
          frictionAir: 0, 
          friction: 0.0001,
          restitution: 0.8,
          render: {
             sprite: {
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
  
      World.add(world, mouseConstraint);
  
  
  
  // run both the engine, and the renderer
  Matter.Runner.run(engine) 
  Render.run(renderer)
  
  let time = 0
  const changeGravity = function () {
    time = time + 0.001
  
    engine.world.gravity.x = Math.sin(time)
    engine.world.gravity.y = Math.cos(time)
   
    requestAnimationFrame(changeGravity)
  }
  
  changeGravity()
  
  window.addEventListener("deviceorientation", function (event) {
    engine.world.gravity.x = event.gamma / 30
    engine.world.gravity.y = event.beta / 30
  })
  