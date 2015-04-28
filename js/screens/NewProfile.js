game.NewProfile= me.ScreenObject.extend({
	/**	
	 *  action to perform on state change
	 */
	onResetEvent: function() {	
		me.game.world.addChild( new me.Sprite (0, 0, me.loader.getImage('new-screen')), -10);
                document.getElementById("input").style.visibility = "visisble";
                document.getElenemtById("register").style.visisbility = "visible";
                
                me.uninput.bindKey(me.input.KEY.B);
                me.uninput.bindKey(me.input.KEY.Q);
                me.uninput.bindKey(me.input.KEY.E);
                me.uninput.bindKey(me.input.KEY.W);
                me.uninput.bindKey(me.input.KEY.A);
                
                
                me.game.world.addChild(new (me.Renderable.extend ({
                    init: function(){
                        this._super(me.Renderable, 'init', [10, 10, 300, 50]);
                        this.font = new me.Font("Arial", 26, "white");
                    },
                    
                    draw: function(renderer){
                        this.font.draw(renderer.getContext(), "PICK A USERNAME AND PASSWORD", this.pos.x, this.pos.y);
                    }
                  
                })));
                
	},
	
	
	/**	
	 *  action to perform when leaving this screen (state change)
	 */
	onDestroyEvent: function() {
	        document.getElementById("input").style.visibility = "hidden";
                document.getElenemtById("register").style.visisbility = "hidden";
	}
});



